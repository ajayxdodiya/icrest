<?php 
   $pg = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); 
   ?>
<!doctype html>
<html lang="en" class="login-open">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="assets/css/style.min.css">
      <link rel="icon" type="image/png" href="assets/images/favicon.png" />
      <title>Icrest Models</title>
   </head>
   <body class="login-open">
      <!-- Content -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top">
         <div class="container">
            <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo.png" alt="ajay dodiya">          
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item <?php if($pg=='index'){?>active<?php }?>"><a class="nav-link" href="index.php">Home </a></li>
                  <li class="nav-item <?php if($pg=='products'){?>active<?php }?>"><a class="nav-link" href="products.php">Products </a></li>
                  <li class="nav-item <?php if($pg=='vendors'){?>active<?php }?>"><a class="nav-link" href="vendors.php">Vendors </a></li>
                  <li class="nav-item <?php if($pg=='subscription'){?>active<?php }?>"><a class="nav-link" href="subscription.php">Subscription </a></li>
                  <?php                     
                     if(!isset($_COOKIE['loggedin'])) {
                        echo '<li class="nav-item"><a href="#" class="nav-link" data-modalopen="#loginModal">Login/Signup </a></li>';
                        echo '<li class="nav-item"><a class="nav-link nav-btn" href="#" data-modalopen="#vendorsignupModal">Vendor’s Login </a></li>';
                     } else {                        
                        echo ' <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hi, '.$_COOKIE['loggedin'].'
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">                          
                          <a class="dropdown-item '; if($pg=='my-cart'){ echo 'active'; } echo '" href="my-cart.php"><i class="fa fa-shopping-cart"></i> My Cart </a>                          
                          <a class="dropdown-item '; if($pg=='my-orderes'){ echo 'active'; } echo '" href="my-orderes.php"><i class="fa fa-clipboard-list"></i> My Orderes</a>                          
                          <a class="dropdown-item '; if($pg=='my-wishlist'){ echo 'active'; } echo '" href="my-wishlist.php"><i class="fa fa-heart"></i>   My Wishlist</a>                          
                          <a class="dropdown-item '; if($pg=='my-setting'){ echo 'active'; } echo '" href="my-setting.php"><i class="fa fa-cog"></i>  Account Setting</a>                          
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="user.php"><i class="fa fa-power-off"></i>  Logout</a>
                        </div>
                      </li>';
                     }
                     ?>                                    
                  <li class="nav-item"><a class="nav-link nav-btn nav-btn-fill" href="my-cart.php"><i class="fa fa-shopping-cart"></i> <?php  if(!isset($_COOKIE['loggedin'])) { echo '0'; } else { echo '3'; }?> Item/s </a></li>
               </ul>
            </div>
         </div>
      </nav>
      <aside>        
         <div class="login-modal" id="loginModal">
            <div class="login-modal-content">
               <div class="login-modal-card initModal">
                  <a href="javascript:void(0)" class="login-close" data-modalclose="">&times;</a>
                  <div class="login-title">
                     <img src="assets/images/logo.png" alt="">                   
                  </div>
                  <div class="login-body" id="loginBody">
                     <div class="icrest-input">
                        <label>Email</label>
                        <input type="text" placeholder="Email">
                     </div>
                     <div class="icrest-input">
                        <label><span>Password</span><span><a href="#" class="forgot-link">Forgot Password ?</a></span></label>
                        <input type="password" placeholder="Password">
                     </div>
                     <div class="login-action">
                        <a href="user.php?login" class="btn-icrest filled">Login</a>
                        <a href="#" class="btn-icrest" data-modalopen="#signupModal">Sign Up</a>
                     </div>
                  </div>
                  <div class="login-body hidden" id="forgotBody">
                     <div class="icrest-input">
                        <label>Email</label>
                        <input type="text" value="johndoe1989@gmail.com" autofocus placeholder="Email">
                     </div>
                     <div class="status success">
                        <div class="status-icon"><i class="fas"></i></div>
                        <div class="status-mg">Password link sent successfully. Please check you inbox.</div>
                     </div>
                     <div class="login-action">
                        <a href="#" class="btn-icrest filled">Send Link</a>                  
                        <a href="#" class="btn-icrest" data-modalclose="">Cancel</a>                  
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="login-modal" id="signupModal">
            <div class="login-modal-content">
               <div class="login-modal-card initModal">
                  <a href="javascript:void(0)" class="login-close" data-modalclose="">&times;</a>
                  <div class="login-title">
                     <img src="assets/images/logo.png" alt="">                   
                  </div>
                  <div class="login-body">
                     <div class="row">
                        <div class="col-12 col-sm-12">
                           <div class="icrest-input">
                           <label>Full Name</label>
                           <input type="text" placeholder="Full Name">
                           </div>
                        </div>
                        <div class="col-12 col-sm-12">
                           <div class="icrest-input">
                           <label>Email</label>
                           <input type="text" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12 col-sm-12">
                           <div class="icrest-input">
                           <label>Mobile</label>
                           <input type="text" placeholder="Mobile">
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="icrest-input">
                              <label>Country</label>
                              <select name="" id="" class="noselect">
                                 <option value="">Select</option>
                                 <option value="1">india</option>
                              </select>
                           </div>
                        </div>                        
                        <div class="col-12 col-sm-6">
                           <div class="icrest-input">
                           <label>City</label>
                           <input type="text" placeholder="City">
                           </div>
                        </div>                      
                        <div class="col-12 col-sm-6">
                           <div class="icrest-input">
                           <label>Password</label>
                           <input type="password" placeholder="Password">
                           </div>
                        </div>                    
                        <div class="col-12 col-sm-6">
                           <div class="icrest-input">
                           <label>Confirm Password</label>
                           <input type="password" placeholder="Confirm">
                           </div>
                        </div>
                     </div>                                       
                     <div class="login-action">
                        <a href="user.php?login" class="btn-icrest filled">Sign Up</a>
                        <a href="#" class="btn-icrest" data-modalclose="">Cancel</a>
                     </div>
                  </div>                 
               </div>
            </div>
         </div>
         <div class="login-modal" id="vendorsignupModal">
            <div class="login-modal-content">
               <div class="initModal">
                  <div class="container">
                     <div class="signup-panel">
                     <a href="javascript:void(0)" class="signup-close" data-modalclose="">&times;</a>
                        <div class="signup-banner">
                           <img src="assets/images/banner-sm.jpg" alt="" class="signup-banner-img">
                           <div class="signup-banner-layer"></div>
                           <div class="signup-banner-content">
                              <img src="assets/images/logo_fff.png" alt="" class="signup-banner-logo">  
                              <h3>Welcome to Icrest</h3>
                              <p>Please fill this form to become a vendor at icrest model.</p>
                           </div>
                        </div>
                        <div class="sign-up-content">
                           <div class="row">
                              <div class="col-12">
                                 <ul class="signup-steps">
                                    <li data-id="1" class="active"><span><i class="fa fa-user"></i></span></li>
                                    <li data-id="2"><span><i class="fa fa-map-marker-alt"></i></span></li>
                                    <li data-id="3"><span><i class="fa fa-globe"></i></span></li>
                                    <li data-id="4"><span><i class="fa fa-lock"></i></span></li>
                                 </ul>
                                 <div class="signup-steps-content" id="signup1" style="display: block">
                                    <div class="signup-row-wrap signup-row-wrap-min-height-auto">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>Full Name</label>
                                                <input type="text" placeholder="Full Name">
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>Email</label>
                                                <input type="text" placeholder="Email">
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>Mobile</label>
                                                <input type="text" placeholder="Mobile">
                                             </div>
                                          </div>                                         
                                       </div>
                                    </div>
                                    <div class="sign-up-action right">
                                       <a href="#" class="btn-icrest navtosignup" data-tabno="2">Next</a>
                                    </div>
                                    <div class="already-vendor">
                                             <small>  Already a Vendor ? Login here </small> <a href="https://keenthemes.com/metronic/preview/demo1/custom/pages/user/login-1.html" class="btn-icrest filled" target="_new"><i class="fa fa-user-tie"></i> Vendor Login</a>
                                          </div>
                                 </div>
                                 <div class="signup-steps-content" id="signup2">
                                    <div class="signup-row-wrap">
                                       <div class="row">
                                          <div class="col-12 col-sm-6">
                                             <div class="icrest-input">
                                                <label>Country</label>
                                                <select name="" id="">
                                                   <option value="">Select</option>
                                                   <option value="1">india</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-6">
                                             <div class="icrest-input">
                                                <label>State</label>
                                                <select name="" id="">
                                                   <option value="">Select</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>City</label>
                                                <select name="" id="">
                                                   <option value="">Select</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>Full Address</label>
                                                <textarea placeholder="Address"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sign-up-action">
                                       <a href="#" class="btn-icrest navtosignup" data-tabno="1">Previous</a>
                                       <a href="#" class="btn-icrest navtosignup" data-tabno="3">Next</a>
                                    </div>
                                 </div>
                                 <div class="signup-steps-content" id="signup3">
                                    <div class="signup-row-wrap">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>Website</label>
                                                <input type="text" placeholder="http://www.example.com">
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>Facebook URL</label>
                                                <input type="text" placeholder="https://www.facebook.com/businessname">
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>Linkedin URL</label>
                                                <input type="text" placeholder="https://www.linkedin.com/businessname">
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>Instagram URL</label>
                                                <input type="text" placeholder="https://www.instagram.com/businessname">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sign-up-action">
                                       <a href="#" class="btn-icrest navtosignup" data-tabno="2">Previous</a>
                                       <a href="#" class="btn-icrest navtosignup" data-tabno="4">Next</a>
                                    </div>
                                 </div>
                                 <div class="signup-steps-content" id="signup4">
                                    <div class="signup-row-wrap">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>Business Name</label>
                                                <input type="text" placeholder="Business Name">
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="icrest-input">
                                                <label>Profile Description</label>
                                                <textarea placeholder="Bio"></textarea>
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-6">
                                             <div class="icrest-input">
                                                <label>Password</label>
                                                <input type="password" placeholder="Password">
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-6">
                                             <div class="icrest-input">
                                                <label>Confirm Password</label>
                                                <input type="password" placeholder="Confirm">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sign-up-action">
                                       <a href="#" class="btn-icrest navtosignup" data-tabno="3">Previous</a>
                                       <a href="#" class="btn-icrest" data-tabno="5">Register</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </aside>
      <main>