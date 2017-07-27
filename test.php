<?php
	include_once('/includes/header.php');
?>

<html>
<head>
    <title>Test Page</title>
    <link type="text/css" rel="stylesheet" href="materialize/css/custom.css">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    
    <!-- SCRIPTS HERE -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="includes/jquery.js"></script>
    <script type='text/javascript' src="../materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="/includes/script.js"></script>
    </head>
<body>
  <div class="container">
    <div class="col s10 l10">
        <div class="card-panel blue darken-2">
            <div class="col s10 l10 m10">
                <div class="container form">
                    <form class="col s10" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <select class="icons">
                                    <option value='' disabled selected>Choose your option</option>
                                    <option value='' data-icon="/content/images/spot/logo.jpg" class="left circle">SPOT</option>
                                </select>
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
    <label>Materialize Select</label>
  </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 m10 l10">
                            <input id="username" type='text' class='validate'>
                                <label for='username'>User Neym</label>
                            </div>
                        </div>
                    </form>
                
                     <a class="btn" href="#peex-modal">Open This</a>
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
        </div>
      </div>
    
    </body>
</html>

<?php 
include_once('/includes/footer.php');
?>