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
        $list_group .= "<option value='$groupID' data-icon='../../content/images/$groupname/logo.jpg' class='left circle'>$groupdesc</option>";
    }

if (isset($_POST['addevent'])){
		$ename = mysqli_real_escape_string($con, $_POST['ename']);
        $enick = mysqli_real_escape_string($con, $_POST['enick']);
        
        $edir = $_SERVER['DOCUMENT_ROOT'] . '/casppr/event/' . $enick;
     
    if (!is_file($enick) && !is_dir($enick)) {
           mkdir($enick); //create directory
   
}
else
{
    echo "$enick exists and is a valid dir";
}
		//$upload = "../../images/products/"; # location where to upload the image
        $image = $_FILES["eimage"]["name"]; # gets the file from file upload
		$newImage = date('Ymd-') . basename($image); # eg. 20170322051234-sample.jpg
        $file = $edir .'/'. $newImage;
        move_uploaded_file($_FILES["eimage"]["tmp_name"], $file);
        
        $image = mysqli_real_escape_string($con, $file);
        $description = mysqli_real_escape_string($con, $_POST['description']);
        $location = mysqli_real_escape_string($con, $_POST['location']);
        $artGroup = mysqli_real_escape_string($con, $_POST['agroup']);
        $dateStart = mysqli_real_escape_string($con, $_POST['dstart']);
        $timeStart= mysqli_real_escape_string($con, $_POST['estart']);
        $dateEnd= mysqli_real_escape_string($con, $_POST['dend']);
        $timeEnd= mysqli_real_escape_string($con, $_POST['evend']);
        $username = $_SESSION['userid'];
        $creator= mysqli_real_escape_string($con, $username);
        
        
		$sql_add = "INSERT INTO events VALUES ('', '$ename', '$description', '$dateStart', '$timeStart', '$dateEnd', '$timeEnd', '$location', '', '', '$creator', $artGroup, NOW(), NOW(),' $image'";
		$con->query($sql_add) or die(mysqli_error($con));
        
		//header('location: index.php');
	} else { echo 'shit';}


?>
<div class="row"></div><div class="row"></div>
    <div class="row">
        <div class="col s12 m10 l10 push-l1 push-m1">
            <div class="card">
                <div class="card-image" >
                    <img id="event-img" src="../content/images/spot/logo.jpg" onerror="this.src='../content/images/OCA/logo.jpg'" height="300em">
             <div class="file-field input-field">
                 
                    <form method="post" class="col s12 m12 l12" enctype="multipart/form-data">
      <div class="btn-floating halfway-fab waves-effect waves-light red center">
        <span><i class="material-icons">image</i></span>
        <input type="file" id="eimage" name="eimage" onchange="readURL(this);">
      </div>
    </div>
                    
                    
                   
                    
                </div>
                <div class="row">
                <div class="card-content">
                        
                        <div class="row">
                             <div class="input-field col s12 l10 m12 push-l1">
                                <input id="ename" name="ename" type="text" class="validate" tabindex="3">
                                <label for="ename">Event Name</label>
                            </div>
                        </div>
                        <div class="row">
                             <div class="input-field col s12 l10 m12 push-l1">
                                <input id="description" name="description" type="text" class="validate" tabindex="3">
                                <label for="description">Description</label>
                            </div>
                        </div>
                       <div class="row">
                             <div class="input-field col s12 l10 m12 push-l1">
                                <input id="location" name="location" type="text" class="validate" tabindex="3">
                                <label for="location">Location</label>
                            </div>
                        </div>
                       
                         <div class="row">
                            <div class="input-field col s12 l5 m6 push-l1">
                                <input id="enick" name="enick" type="text" class="validate" tabindex="3">
                                <label for="enick">Event Nickname</label>
                            </div>
                             
                       <div class="input-field col s12 m6 l5 push-l1">
                                <select id="agroup" name="arg" class="icons" tabindex="1">
                               <?php echo $list_group; ?>
                                </select>
                            </div>
                        
                        <div class="row">
                            <div class="col s10 l10 m10 push-l1 push-m1 push-s1" style="margin-bottom:-2em;">
                            <label style="font-size:2.5em;">Event Start</label></div>
                           
                        </div>
                         
                       <div class="row">
                           
                            <div class="input-field col s12 l5 m6 push-l1">
                             <input type="text" class="datepicker" id="dstart" name="dstart" tabindex="14"> <input type="number" class="datepicker" id="agrp" name="agroup" tabindex="14" hidden>
                            <label for="dstart">Date Start</label>
                            </div>
                        <div class="input-field col s12 l5 m6 push-l1">
                                <input type="text" class="timepicker" id="estart" name="estart">
                                <label for="estart">Time Start</label>
                            </div>
                        </div> 
                         <div class="row">
                            <div class="col s10 l10 m10 push-l1 push-m1 push-s1" style="margin-bottom:-2em;">
                            <label style="font-size:2.5em;">Event End</label></div>
                           
                        </div>
                         
                       <div class="row">
                           
                            <div class="input-field col s12 l5 m6 push-l1">
                             <input type="text" class="datepicker" id="dend" name="dend" tabindex="14">
                            <label for="dend">Date End</label>
                            </div>
                        <div class="input-field col s12 l5 m6 push-l1">
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