<?php
	$page_title = "Registration";
	include_once('../includes/header.php');
?>


 <div class="col s12 m12 l8 push-l3">
    <div class="card horizontal">
      <div class="card-image l2">
        <img src="https://lorempixel.com/100/190/nature/6">
          <img src="<?php //echo $agimg; ?>">
      </div>
      <div class="card-stacked">
        <div class="card-content">
            <div class='form col s12 m12 l12' method='post'>
                
                <div class="input-field col s12 m6">
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
            
            
                    <h4 class="header2">Form with placeholder</h4>
                    <div class="row">
                      <form class="col s12">
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
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>


<div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="http://materializecss.com/images/sample-1.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
                <div class="row">
                <div class="col s12 m12 l12">
                <form class="col s12">
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
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>

  
      
            



<?php

	include_once('../includes/footer.php');
?>