<?php
	$page_title = "Registration";
	include_once('../includes/header.php');
?>
 




        <div class="col s12 m7 l8 push-l2">
          <div class="card">
            <div class="card-image">
              <img src="http://materializecss.com/images/sample-1.jpg" height="300em">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
                <div class="row">
                
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <select class='icons'>
                                <option value='' disabled selected>Choose your option</option>
                            </select>
                        </div>
                    
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                    <select class="icons">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="CPT" data-icon="../content/images/cpt/logo.png" class="left circle">Cultural Promotions Team</option>
                        <option value="CPT" data-icon="../content/images/df/logo.png" class="left circle">Dulaang Filipino</option>
                        <option value="CPT" data-icon="../content/images/karilyo/logo.png" class="left circle">Karilyo</option>
                        <option value="CPT" data-icon="../content/images/sbrdc/logo.png" class="left circle">Saint Benilde Romancon Dance Company</option>
                        <option value="CPT" data-icon="../content/images/spot/logo.png" class="left circle">Stage Productions and Operations Team</option>
                    </select>
                    <label>Artist Group</label>
                </div>  
                    </div>
                    <div class="row">
                <div class="input-field col s12">
                    <select>
                              <option value="" disabled selected>Choose your option</option>
                              <option value="1">Option 1</option>
                              <option value="2">Option 2</option>
                              <option value="3">Option 3</option>
                            </select>
                    <label>Subgroup</label>
                </div>
                    </div>
            
                        <div class="row">
                          <div class="input-field col s12">
                              <select class="icons">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="CPT" data-icon="../content/images/cpt/logo.png" class="left">Cultural Promotions Team></option>
                              </select>
                            <label for="artist_group" class="active">Artist Group</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="John Doe" id="name2" type="text">
                            <label for="first_name" class="active">Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="john@domainname.com" id="email2" type="email">
                            <label for="email" class="active">Email</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="YourPassword" id="password2" type="password">
                            <label for="password" class="active">Password</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <textarea placeholder="Oh WoW! Let me check this one too." id="message2" class="materialize-textarea"></textarea>
                            <label for="message" class="active">Message</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                                
                               
                                <a class="waves-effect waves-light btn modal-trigger" href="#peex-modal">Open This</a> 
                                <div id="peex-modal" class="modal modal-login">
        <div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div>

        <div class="container form">
            <div class="row">
                <div class="input-field col s12 l12">
                <input id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
            
            </div>
            <div class="row">
                <div class="input-field col s12 l12">
                <input id="psword" type="password" class="validate">
                <label for="pasword">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="col s8 l4 push-s3 push-l8"> <a class="waves-effect waves-light btn push-s6 push-l6">LOG IN</a></div>
                
            </div>
        </div>
    </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                
                
                
                
                 <div class="row">
         <form class="col s12">
            <div class="row">
               <label>Materialize Select</label>
               <select>
                  <option value="" disabled selected>Select Fruit</option>
                  <option value="1">Mango</option>
                  <option value="2">Orange</option>
                  <option value="3">Apple</option>
               </select>               
            </div>
            <div class="row">
               <label>Materialize Multi Select</label>
               <select multiple>
                  <option value="" disabled selected>Select Fruit</option>
                  <option value="1">Mango</option>
                  <option value="2">Orange</option>
                  <option value="3">Apple</option>
               </select>              
            </div>
            <div class="row">
               <label>Select with Optgroup</label>
               <select>
                  <optgroup label="Fruits">
                     <option value="1">Mango</option>
                     <option value="2">Orange</option>
                     <option value="3">Apple</option>
                  </optgroup>
                  <optgroup label="Vegs">
                     <option value="4">Brinjal</option>
                     <option value="5">Potato</option>
                     <option value="6">Tomato</option>
                  </optgroup>
               </select>
            </div>
            <div class="row">
               <label>Select with images</label>
               <select class="icons">
                  <option value="" disabled selected>Select Technology</option>
                  <option value="1" data-icon="html5-mini-logo.jpg" class="circle">HTML</option>
                  <option value="2">JavaScript</option>
                  <option value="3">CSS</option>
               </select>
            </div>
           
         </form>       
      </div>
                </div>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>

        
      

  
      
            



<?php

	include_once('../includes/footer.php');
?>