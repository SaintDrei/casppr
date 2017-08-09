<?php
	$page_title = "Create Event";
	include_once('../includes/header_admin.php');
    
  $sql_group = "SELECT groupID, Name, Description from artistgroups ORDER BY Name";
    $result_group = $con->query($sql_group);
    $list_group = "";
    
    while ($rowgroup = mysqli_fetch_array($result_group)){
        $groupID = $rowgroup['groupID'];
        $groupdesc = $rowgroup['Description'];
        $groupname = $rowgroup['Name'];
        $list_group .= " <option value='$groupID' data-icon='../content/images/$groupname/logo.jpg' class='left circle'>$groupdesc</option>";
    }

if (isset($_POST['addevent']))
	{
		
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
                               <?php echo $list_group; ?>
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
                                <i class="tiny material-icons right">add</i>
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