<?php
	$page_title = "Registration";
	include_once('../includes/header.php');
    

    $sql_scholar = "SELECT scholarID, Name, Description FROM scholarship ORDER BY Name";
    $result_scholar = $con->query($sql_scholar);
    $list_scholar = "";
    
	while ($row = mysqli_fetch_array($result_scholar))
	{
        $scholarID = $row['scholarID'];
		$name = $row['Name'];
        $list_scholar .= "<option value='$scholarID'>$name</option>";
	}
	
	$sql_subgroup = "SELECT groupID, Name, Description FROM artistgroups ORDER BY Name";
    $result_subgroup = $con->query($sql_subgroup);
    $list_subgroup = "";
    
	while ($row1 = mysqli_fetch_array($result_subgroup))
	{
        $groupID = $row1['groupID'];
		$name = $row1['Name'];
        $list_group .= "<option value='$groupID'>$name</option>";
	}
	
	$sql_city = "SELECT cityID, name, regionID FROM cities ORDER BY name";
    $result_city = $con->query($sql_city);
    $list_city = "";
    
	while ($row2 = mysqli_fetch_array($result_city))
	{
        $cityID = $row2['cityID'];
		$name = $row2['name'];
        $list_city .= "<option value='$cityID'>$name</option>";
	}
	
	if (isset($_POST['add']))
	{
		$groupID = mysqli_real_escape_string($con, $_POST['groupID']);
		$firstName = mysqli_real_escape_string($con, $_POST['firstName']);
		$lastName = mysqli_real_escape_string($con, $_POST['lastName']);
		$middleName = mysqli_real_escape_string($con, $_POST['middleName']);
		$gender = mysqli_real_escape_string($con, $_POST['gender']);
		$religion = mysqli_real_escape_string($con, $_POST['religion']);
		$nickname = mysqli_real_escape_string($con, $_POST['nickname']);
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password= hash('sha256', mysqli_real_escape_string($con, $_POST['password']));
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$schoolID = mysqli_real_escape_string($con, $_POST['schoolID']);
		$cityAddress = mysqli_real_escape_string($con, $_POST['cityAddress']);
		$zip = mysqli_real_escape_string($con, $_POST['zip']);
		$cityID = mysqli_real_escape_string($con, $_POST['cityID']);
		$clandline = mysqli_real_escape_string($con, $_POST['clandline']);
		$cmobile = mysqli_real_escape_string($con, $_POST['cmobile']);
		$provincialAddress = mysqli_real_escape_string($con, $_POST['provincialAddress']);
		$clandline = mysqli_real_escape_string($con, $_POST['plandline']);
		$cmobile = mysqli_real_escape_string($con, $_POST['pmobile']);
		$birthdate = mysqli_real_escape_string($con, $_POST['birthDate']);
		$scholarID = mysqli_real_escape_string($con, $_POST['scholarID']);

		$sql_add = "INSERT INTO users VALUES ('', '', '$groupID', '$firstName', '$lastName', '$middleName', '$gender', '$religion', $nickname, '$username', '$password', '$email', '$schoolID', '$cityAddress', '$cmobile', '$clandline', '$provincialAddress', '$pmobile', '$plandline', '$zip', '$cityID', '$birthDate', '$scholarID', NOW(), NULL)";
		$con->query($sql_add) or die(mysqli_error($con));
		//header('location: index.php');
	}


?>
<div class="row"></div><div class="row"></div>
    <div class="row">
        <div class="col s12 m10 l8 push-l2 push-m1">
            <div class="card">
                <div class="card-image">
                    <img id="changing-img" src="../content/images/spot/logo.jpg" height="300em">
                </div>
                <div class="row">
                <div class="card-content">
                    <form class="col s12 m12 l10">
                        <div class="row">
                            <div class="input-field col s12 m6 l6 push-l1">
                                <select id="artgroup" name="groupID" class="icons" tabindex="1">
                                  <option value="" disabled selected>Choose your Artist Group</option>
                                  <option value="coro" data-icon="../content/images/coro/logo.jpg" class="left circle">Coro San Benildo</option>
                                  <option value="cpt" data-icon="../content/images/cpt/logo.png" class="left circle">Cultural Promotions Team</option>
                                  <option value="df" data-icon="../content/images/df/logo.jpg" class="left circle">Dulaang Filipino</option>
                                  <option value="karilyo" data-icon="../content/images/karilyo/logo.jpg" class="left circle">Karilyo</option>
                                  <option value="sbrdc" data-icon="../content/images/sbrdc/logo.jpg" class="left circle">Saint Benilde Romançon Dance Company</option>
                                  <option value="spot" data-icon="../content/images/spot/logo.jpg" class="left circle">Stage Production Operations Team</option>
                                </select>
                                <label>Artist Group</label>
                            </div>
                            <div class="input-field col s12 m6 l6 push-l1">
                                <select class="icons" tabindex="2" name="subgroup" id="subgroup">
                                  <option value="" disabled selected>Choose your option</option>
                                  <?php echo $list_group ?>
                                    
                                </select>
                                <label>Sub Group</label>
                            </div>
                        </div>
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="firstName" type="text" class="validate" tabindex="3">
                                <label for="firstName">First Name</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="lastName" type="text" class="validate" tabindex="4">
                                <label for="lastName">Last Name</label>
                            </div>
                        </div> 
                       
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="middleName" type="text" class="validate" tabindex="5">
                                <label for="middleName">Middle Name</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                              <select class="icons">
      <option value="R" disabled selected>Choose your gender</option>
      <option value="M" data-icon="../content/images/gender/male.jpg" class="left circle">Male</option>
                                  <option value="F" data-icon="../content/images/gender/female.jpg" class="left circle">Female</option>
      <option value="H" data-icon="../content/images/gender/heli.jpg" class="left circle">Attack Helicopter</option>
    </select>
    <label>Gender</label>
                            </div>
                        </div>
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="religion" type="text" class="validate" tabindex="5">
                                <label for="religion">Religion</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="nickname" type="text" class="validate" tabindex="6">
                                <label for="nickname">Nickname</label>
                            </div>
                        </div> 
                       
                        <div class="row">
                            
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="username" type="text" class="validate" tabindex="5" autocomplete="off" disabled>
                                <label for="username" id="unlabel">Username</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="password" name="password" type="password" class="validate" tabindex="6" autocomplete="off">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="email" name="email" type="email" class="validate" tabindex="7">
                                <label for="email">E-Mail</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="schoolID" name="schoolID" type="number" class="validate" maxlength="11"  tabindex="8">
                                <label for="schoolID">School ID</label>
                            </div>
                        </div> 
                        <div class="row">    
                        <div class="input-field col s12 l12 m12 push-l1">
                                <input id="cityAddress" name="cityAddress" type="text" class="validate" tabindex="11">
                                <label for="cityAddress">City Address</label>
                            </div>
                                                  
                        </div>
                        <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="cmobile" type="number" name="cmobile" class="validate" maxlength="11" tabindex="9">
                                <label for="cmobile">Mobile</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="clandline" type="number" name="clandline" class="validate" maxlength="7" tabindex="10">
                                <label for="clandline">Landline</label>
                            </div>
                        </div> 
                        <div class="row">    
                        <div class="input-field col s12 l12 m12 push-l1">
                                <input id="provincialAddress" name="provincialAddress" type="text" class="validate" tabindex="11">
                                <label for="provincialAddress">Provincial Address</label>
                            </div>
                                                  
                        </div>
                        <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="pmobile" name="pmobile" type="number" class="validate" maxlength="11" tabindex="9">
                                <label for="pmobile">Mobile</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="plandline" name="plandline" type="number" class="validate" maxlength="7" tabindex="10">
                                <label for="plandline">Landline</label>
                            </div>
                        </div>
                     
                     <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="zip" type="text" class="validate" tabindex="12" name="zip">
                                <label for="zip">Zip</label>
                            </div>
                          <div class="input-field col s12 m6 l6 push-l1">
                                <select class="icons" tabindex="2" name="city">
                                  <option value="" disabled selected>Choose your City</option>
                                  <?php echo $list_city ?>
                                    
                                </select>
                                <label>City</label>
                            </div>
                            
                        </div>
                      <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                             <input type="text" class="datepicker" id="birthDate" name="birthDate" tabindex="14">
                            <label for="birthDate">Birthday</label>
                            </div>
                         <div class="input-field col s12 m6 l6 push-l1">
                                <select tabindex="15">
                                    <option value="" disabled selected>Scholarship</option>
                                    <?php echo $list_scholar; ?> 
                             </select>
                         </div>
                            
                        </div> 
                        <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                             <input type="text" class="datepicker" id="joindate" name="joindate" tabindex="14">
                            <label for="joindate">Join Date</label>
                            </div>
                        
                            
                        </div>
                     <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="add">Submit
                                <i class="tiny material-icons right">send</i>
                              </button>
                                
                            </div>
                        </div>
                        <div class="row"></div>
                    
                    </form>
                </div>
                </div>
                
            </div>
        </div>

    </div>
    
<?php

	include_once('../includes/footer.php');
?>