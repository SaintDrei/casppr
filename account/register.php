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
                                  <option value="" data-icon="../content/images/coro/logo.jpg" class="left circle">Coro San Benildo</option>
                                  <option value="" data-icon="../content/images/cpt/logo.png" class="left circle">Cultural Promotions Team</option>
                                  <option value="" data-icon="../content/images/df/logo.jpg" class="left circle">Dulaang Filipino</option>
                                  <option value="" data-icon="../content/images/karilyo/logo.jpg" class="left circle">Karilyo</option>
                                  <option value="" data-icon="../content/images/sbrdc/logo.jpg" class="left circle">Saint Benilde Romançon Dance Company</option>
                                  <option value="" data-icon="../content/images/spot/logo.jpg" class="left circle">Stage Production Operations Team</option>
                                </select>
                                <label>Artist Group</label>
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