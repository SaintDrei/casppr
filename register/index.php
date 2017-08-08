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
                                <select id="artgroup" class="icons" tabindex="1">
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
                                <select class="icons" tabindex="2">
                                  <option value="" disabled selected>Choose your option</option>
                                  <?php echo $_subgroups ?>
                                    
                                </select>
                                <label>Sub Group</label>
                            </div>
                        </div>
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="FN" type="text" class="validate" tabindex="3">
                                <label for="FN">First Name</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="LN" type="text" class="validate" tabindex="4">
                                <label for="LN">Last Name</label>
                            </div>
                        </div> 
                       
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="MN" type="text" class="validate" tabindex="5">
                                <label for="MN">Middle Name</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                              <select class="icons">
      <option value="" disabled selected>Choose your gender</option>
      <option value="" data-icon="images/sample-1.jpg" class="left circle">example 1</option>
      <option value="" data-icon="images/office.jpg" class="left circle">example 2</option>
      <option value="" data-icon="images/yuna.jpg" class="left circle">example 3</option>
    </select>
    <label>Gender</label>
                            </div>
                        </div>
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="rel" type="text" class="validate" tabindex="5">
                                <label for="rel">Religion</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="NN" type="text" class="validate" tabindex="6">
                                <label for="NN">Nickname</label>
                            </div>
                        </div> 
                       
                        <div class="row">
                            
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="username" disabled type="text" class="validate" tabindex="5" autocomplete="off" >
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="password" type="password" class="validate" tabindex="6" autocomplete="off">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="email" type="email" class="validate" tabindex="7">
                                <label for="email">E-Mail</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="SID" type="number" class="validate" maxlength="11"  tabindex="8">
                                <label for="SID">School ID</label>
                            </div>
                        </div> 
                        <div class="row">    
                        <div class="input-field col s12 l12 m12 push-l1">
                                <input id="ctaddress" type="text" class="validate" tabindex="11">
                                <label for="address">City Address</label>
                            </div>
                                                  
                        </div>
                        <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="mobile" type="number" class="validate" maxlength="11" tabindex="9">
                                <label for="mobile">Mobile</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="landline" type="number" class="validate" maxlength="7" tabindex="10">
                                <label for="landline">Landline</label>
                            </div>
                        </div> 
                        <div class="row">    
                        <div class="input-field col s12 l12 m12 push-l1">
                                <input id="provaddress" type="text" class="validate" tabindex="11">
                                <label for="address">Provincial Address</label>
                            </div>
                                                  
                        </div>
                        <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="mobile" type="number" class="validate" maxlength="11" tabindex="9">
                                <label for="mobile">Mobile</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input id="provlandline" type="number" class="validate" maxlength="7" tabindex="10">
                                <label for="landline">Landline</label>
                            </div>
                        </div>
                     
                     <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input id="zip" type="text" class="validate" tabindex="12">
                                <label for="zip">Zip</label>
                            </div>
                          <div class="input-field col s12 l6 m6 push-l1">
                                <input id="city" type="text" class="validate" tabindex="13">
                                <label for="city">City</label>
                            </div>
                            
                        </div>
                      <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                             <input type="text" class="datepicker" id="birthdate" tabindex="14">
                            <label for="birthdate">Birthday</label>
                            </div>
                         <div class="input-field col s12 m6 l6 push-l1">
                                <select tabindex="15">
                                    <option value="" disabled selected>Scholarship</option>
                                    <?php echo $list_scholar; ?> 
                             </select>
                         </div>
                            
                        </div>
                     <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
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