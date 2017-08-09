
<?php 
	$page_title = "Dashboard";
	include_once('../includes/header_admin.php');
    
?>


  <header>
      
 
      <ul class="dropdown-content" id="user_dropdown">
      
      <li><a class="indigo-text" href="#!">Profile</a></li>
      <li><a class="indigo-text" href="#!">Logout</a></li>
    </ul>
    <nav class="indigo" role="navigation">
        
      <div class="nav-wrapper">
          
<!--        <a data-activates="slide-out" class="button-collapse show-on-" href="#!"><img style="margin-top: 17px; margin-left: 5px;" src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif" /></a>-->

          <ul class="left" onclick="visibility:hidden;">
          <li>
           
          </li>
        </ul>
          
        <ul class="right hide-on-med-and-down">
          <li>
            <a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
          </li>
        </ul>
 

        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>

    <nav>
      <div class="nav-wrapper indigo darken-2">
        
        <a style="margin-left: 20px;" class="breadcrumb" href="#!">Admin</a>
        <a class="breadcrumb" href="#!">Index</a>

        <div style="margin-right: 20px;" id="timestamp" class="right"></div>
          
      </div>
    </nav>
      
  </header>

  <main>
      <div class="row">
      
      </div>
    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>User Management</b>
            </div>
          </div>

          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989968/seller_rcnkab.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Seller</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/people_2_knqa3y.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Customer</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Product Management</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989970/product_mdq6fq.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Product</h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989970/stack_rwg2mz.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Orders</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Brand Management</b>
            </div>
          </div>

          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/brand_lldqpu.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Brand</h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/brand_lldqpu.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Sub Brand</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Category Management</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/squares_dylwo9.png" class="responsive-img" /><br>
                <span class="indigo-text text-lighten-1"><h5>Category</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/squares_dylwo9.png" class="responsive-img" /><br>
                <span class="truncate indigo-text text-lighten-1"><h5>Sub Category</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
<ul class="left">
         
        </ul>
    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large pink waves-effect waves-light">
        <i class="large material-icons">add</i>
      </a>

      <ul>
        <li>
          <a class="btn-floating red"><i class="material-icons">note_add</i></a>
          <a href="" class="btn-floating fab-tip">Add a note</a>
        </li>

        <li>
          <a class="btn-floating yellow darken-1"><i class="material-icons">add_a_photo</i></a>
          <a href="" class="btn-floating fab-tip">Add a photo</a>
        </li>

        <li>
          <a class="btn-floating green"><i class="material-icons">alarm_add</i></a>
          <a href="" class="btn-floating fab-tip">Add an alarm</a>
        </li>

        <li>
          <a class="btn-floating blue"><i class="material-icons">vpn_key</i></a>
          <a href="" class="btn-floating fab-tip">Add a master password</a>
        </li>
      </ul>
    </div>
  </main>

  <footer class="indigo page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">Icon Credits</h5>
          <ul id='credits'>
            <li>
              Gif Logo made using <a href="https://formtypemaker.appspot.com/" title="Form Type Maker">Form Type Maker</a> from <a href="https://github.com/romannurik/FORMTypeMaker" title="romannurik">romannurik</a>
            </li>
            <li>
              Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0"
                target="_blank">CC 3.0 BY</a>
            </li>
            <li>
              Icons made by <a href="http://www.flaticon.com/authors/picol" title="Picol">Picol</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0"
                target="_blank">CC 3.0 BY</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <span>Made By <a style='font-weight: bold;' href="">Tirth Patel</a></span>
      </div>
    </div>
  </footer>
    <?php
    
	include_once('../includes/footclean.php');
    ?>