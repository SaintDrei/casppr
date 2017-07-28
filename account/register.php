<?php
	$page_title = "Registration";
	include_once('../includes/header.php');
?>
    <div class="row">
        <div class="col s12 m10 l8 push-l2">
            <div class="card">
                <div class="card-image">
                    <img src="../content/images/spot/logo.jpg" height="300em">
                </div>
                <div class="row">
                <div class="card-content">
                    <form class="col s12 m10 l10">
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <select class="icons">
                                  <option value="" disabled selected>Choose your option</option>
                                  <option value="" data-icon="../content/images/cpt/logo.png" class="left circle">example 1</option>
                                  <option value="" data-icon="images/office.jpg" class="left circle">example 2</option>
                                  <option value="" data-icon="images/yuna.jpg" class="left circle">example 3</option>
                                </select>
                                <label>Images in select</label>
                            </div>
                        </div>
                    
                    
                    </form>
                </div>
                </div>
                
            </div>
        </div>

    </div>
                
<?php

	include_once('../includes/footer.php');
?>