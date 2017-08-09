<?php
	$page_title = "Create Event";
	include_once('../includes/header_admin.php');
    

    $sql_scholar = "SELECT scholarID, Name, Description FROM scholarship ORDER BY Name";
    $result_scholar = $con->query($sql_scholar);
    $list_scholar = "";
    
	while ($row = mysqli_fetch_array($result_scholar))
	{
        $scholarID = $row['scholarID'];
		$name = $row['Name'];
        $list_scholar .= "<option value='$scholarID'>$name</option>";
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
                <div class="card-image" >
                    <img id="event-img" src="../content/images/spot/logo.jpg" onerror="this.src='../content/images/OCA/logo.jpg'" height="300em">
             <div class="file-field input-field">
      <div class="btn-floating halfway-fab waves-effect waves-light red center">
        <span><i class="material-icons">image</i></span>
        <input type="file" id="eimage" name="eimage" onchange="readURL(this);">
      </div>
    </div>
                    
                    
                   
                    
                </div>
                <div class="row">
                <div class="card-content">
                    <form class="col s12 m12 l10">
                        
                        <div class="row">
                             <div class="input-field col s12 l12 m12 push-l1">
                                <input id="ename" name="ename" type="text" class="validate" tabindex="3">
                                <label for="ename">Event Name</label>
                            </div>
                        </div>
                        <div class="row">
                             <div class="input-field col s12 l12 m12 push-l1">
                                <input id="description" name="description" type="text" class="validate" tabindex="3">
                                <label for="description">Description</label>
                            </div>
                        </div>
                       <div class="row">
                             <div class="input-field col s12 l12 m12 push-l1">
                                <input id="location" name="location" type="text" class="validate" tabindex="3">
                                <label for="location">Location</label>
                            </div>
                        </div>
                       
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="enick" name="enick" type="text" class="validate" tabindex="3">
                                <label for="enick">Event Nickname</label>
                            </div>
                             
                       <div class="input-field col s12 m6 l6 push-l1">
                                <select id="artgroup" name="artgroup" class="icons" tabindex="1">
                                  <option value="" disabled selected>Artist Group</option>
                                  <option value="coro" data-icon="../content/images/coro/logo.jpg" class="left circle">Coro San Benildo</option>
                                  <option value="cpt" data-icon="../content/images/cpt/logo.png" class="left circle">Cultural Promotions Team</option>
                                  <option value="df" data-icon="../content/images/df/logo.jpg" class="left circle">Dulaang Filipino</option>
                                  <option value="karilyo" data-icon="../content/images/karilyo/logo.jpg" class="left circle">Karilyo</option>
                                  <option value="sbrdc" data-icon="../content/images/sbrdc/logo.jpg" class="left circle">Saint Benilde Romançon Dance Company</option>
                                  <option value="spot" data-icon="../content/images/spot/logo.jpg" class="left circle">Stage Production Operations Team</option>
                                </select>
                            </div>
                        
                        <div class="row">
                            <div class="col s10 l10 m10 push-l1 push-m1 push-s1" style="margin-bottom:-2em;">
                            <label style="font-size:2.5em;">Event Start</label></div>
                           
                        </div>
                         
                       <div class="row">
                           
                            <div class="input-field col s12 l6 m6 push-l1">
                             <input type="text" class="datepicker" id="dstart" name="dstart" tabindex="14">
                            <label for="dstart">Date Start</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input type="text" class="timepicker" id="estart" name="estart">
                                <label for="estart">Time Start</label>
                            </div>
                        </div> 
                         <div class="row">
                            <div class="col s10 l10 m10 push-l1 push-m1 push-s1" style="margin-bottom:-2em;">
                            <label style="font-size:2.5em;">Event End</label></div>
                           
                        </div>
                         
                       <div class="row">
                           
                            <div class="input-field col s12 l6 m6 push-l1">
                             <input type="text" class="datepicker" id="dend" name="dend" tabindex="14">
                            <label for="dend">Date End</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input type="text" class="timepicker" id="evend" name="evend">
                                <label for="evend">Time End</label>
                            </div>
                        </div> 
        
                     <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="addevent">Submit
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
         <div class="row">
        <div class="col s12 m10 l8 push-l2 push-m1">
            <div class="card">
            </div>
             </div>
        </div>
    
<?php

	include_once('../includes/footclean.php');
?>