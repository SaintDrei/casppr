<html>
    <head>
     <title>The Materialize Example</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">      
        
        <!-- Stylesheets -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        
        <!-- SCRIPTS -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
        <script type='text/javascript' src="script.js"></script>
        <script type='text/javascript' src="includes/script.js"></script>

    </head>
    <body class="container">
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
        <div class="row">
            <div class="card-panel blue darken-2 z-depth-3">
                <div class="col s12 m4 l4">
                    <a class="btn" href="#peex-modal">Open This</a>
                    
                </div>
            </div>
        </div>
      <div id="peex-modal" class="modal modal-trigger">
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
    
    </body>
</html>