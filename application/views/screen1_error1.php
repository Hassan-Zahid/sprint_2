<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="favicon" href="Images/Icon.ico"/>
    <title>World's Largest Professional Network | LinkedIn</title>
    <link href="<?php echo base_url();?>application/css/CSS2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>application/css/StyleSheet2j.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="header">
        <div id="top-header">
            <div id="wrapper">
            <h2 class="logo-container"><a href="Screen1.htm" id="li-logo">LinkedIn Home</a></h2>
            <ul id="header-list">
            
                <li class="nav-item">
                    <a href="" class="nav-link" id="tag_a">
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
    </div>
    <div id="body">
        <div class="wrapper">
        	<div id="error_1">
<strong id="text_set">There are one or more error in your input values</strong>
</div>
            <div id="main">
                <div id="content">
                    <h1>
                        Over 225 million professionals use LinkedIn to exchange 
                        information, ideas and opportunities
                    </h1>
                    <ul>
                        <li id="reconnect">
                            Stay informed about your contacts and industry
                        </li>
                        <li id="answers">
                            Find the people & knowledge you need to achieve your goals
                        </li>
                        <li id="power">
                            Control your professional identity online
                        </li>
                    </ul>
                </div>
                <div class="leo-module mod-feat jointoday" id="form">
                    <div class="header">
                        <h2>Join LinkedIn Today</h2>
                    </div>
                    <div class="content">
                        <div class="feature">
                            <fieldset>
                            <br />
                                <ul>
                                    <li id="first-name">
                                  
                                        <label for="firstName-coldRegistrationForm" id="label_1">First Name:</label>
                                        <div class="fieldgroup">
                                            <!--<span class="error" id="firstName-coldRegistrationForm-error"></span>-->
                                            
                                            <?php
                                                echo form_open('home/create_member');
                                                echo form_input('first_name','');
                                            ?>
                                            <!--<input type="text" name="firstName" id="firstName-coldRegistrationForm" maxlength="20" />-->
                                        </div>
                                    </li>
                                    <li id="last-name">
                                        <label for="lastName-coldRegistrationForm" id="label_2">Last Name:</label>
                                        <div class="fieldgroup">
                                            <span class="error" id="lastName-coldRegistrationForm-error"></span>
                                            <?php
                                                echo form_input('last_name','');
                                            ?>

                                            <!--<input type="text" name="lastName" id="Text1" maxlength="40" />-->
                                        </div>
                                    </li>
                                    <li id="email-address">
                                        <label for="email-coldRegistrationForm"  id="label_3">Email:</label>
                                        <div class="fieldgroup">
                                            <span class="error" id="email-coldRegistrationForm-error"></span>
                                            <?php
                                                echo form_input('email_address','');
                                            ?>

                                            <!--<input type="email" name="email" id="email-coldRegistrationForm" maxlength="128" data-ime-mode-disabled />-->
                                        </div>
                                    </li>
                                    <li id="password">
                                        <label for="password-coldRegistrationForm" id="label_4">Password:</label>
                                        <div class="fieldgroup">
                                            <span class="error" id="password-coldRegistrationForm-error"></span>
                                            <?php
                                                echo form_password('password','');
                                            ?>

                                            <!--<input type="password" name="password" id="password-coldRegistrationForm" />-->
                                            <p class="hint">6 or more characters</p>
                                        </div>
                                    </li>
                                </ul>
                                <p class="action">
                                    <?php
                                        echo form_submit('submit','Join Now');
                                    ?>

                                    <!--<input type="submit" value="Join Now" id="btn-submit" class="btn-tertiary" />-->
                                    <a href="#agreement">*</a>
                                </p>
                                <div class="progress-indecator"></div>
                                <p class="already-on-linkedin-message">
                                    Already on LinkedIn?
                                    <a href="<?php echo site_url('login/index') ?>">Sign in.</a>
                                </p>

                    
                               
                        <!--      <?php echo validation_errors('<h1 id="goman"/>','<h2>','<h3>','<h4>'); ?>-->
                                
                               	
                                
                            </fieldset>
                            
                        </div>
                    </div>
                </div>
                <div id="search-browse">
                    <div id="search">
                        <form action="" method="get">
                            <h3>Search for someone by name:</h3>
                            <ul>
                                <li>
                                    <label for="first" id="control_gen_2" style="display:none;">First Name</label>
                                    <input type="text" name="first" id="first" placeholder="First Name" />
                                </li>
                                <li>
                                    <label for="last" id="control_gen_3" style="display:none;">Last Name</label>
                                    <input type="text" name="last" id="last" placeholder="Last Name" />
                                </li>
                            </ul>
                            <p class="action">
                                <input class="btn-secondary" type="submit" name="search" value="Go" />
                            </p>
                        </form>
                    </div>
                    <div id="directory" class="us">
                        <h3>
                            LinkedIn member directory:
                        </h3>
                        <ol type="a" class="primary">
                            <li>
                                <a href="">a</a>
                            </li>
                            <li>
                                <a href="">b</a>
                            </li>
                            <li>
                                <a href="">c</a>
                            </li>
                            <li>
                                <a href="">d</a>
                            </li>
                            <li>
                                <a href="">e</a>
                            </li>
                            <li>
                                <a href="">f</a>
                            </li>
                            <li>
                                <a href="">g</a>
                            </li>
                            <li>
                                <a href="">h</a>
                            </li>
                            <li>
                                <a href="">i</a>
                            </li>
                            <li>
                                <a href="">j</a>
                            </li>
                            <li>
                                <a href="">k</a>
                            </li>
                            <li>
                                <a href="">l</a>
                            </li>
                            <li>
                                <a href="">m</a>
                            </li>
                            <li>
                                <a href="">n</a>
                            </li>
                            <li>
                                <a href="">o</a>
                            </li>
                            <li>
                                <a href="">p</a>
                            </li>
                            <li>
                                <a href="">q</a>
                            </li>
                            <li>
                                <a href="">r</a>
                            </li>
                            <li>
                                <a href="">s</a>
                            </li>
                            <li>
                                <a href="">t</a>
                            </li>
                            <li>
                                <a href="">u</a>
                            </li>
                            <li>
                                <a href="">v</a>
                            </li>
                            <li>
                                <a href="">w</a>
                            </li>
                            <li>
                                <a href="">x</a>
                            </li>
                            <li>
                                <a href="">y</a>
                            </li>
                            <li>
                                <a href="">z</a>
                            </li>
                            <li>
                                <a class="callout-trigger nlcl-hovercard-trigger" id="control_gen_4">more</a>
                            </li>
                            <li class="country-search">
                                Browse members
                                <a>by country</a>
                            </li>
                        </ol>
                    </div>
                    <p id="agreement">
                        <strong>*</strong>
                         By joining LinkedIn, you agree to LinkedIn's 
                         <a href"">User Agreement</a>
                         ,
                         <a href="">Privacy Ploicy</a>
                         and
                         <a href="">Cookie Ploicy</a>
                         .
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="wrapper">
            <ul class="nav-footer">
                <li>
                    <a href="" target="_blank" class="cust-svc-link">
                        <strong>Help Center</strong>
                    </a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a>Press</a>
                </li>
                <li>
                    <a>Blog</a>
                </li>
                <li>
                    <a>Careers</a>
                </li>
                <li>
                    <a>Advertising</a>
                </li>
                <li>
                    <a>Talent Solutions</a>
                </li>
                <li>
                    <a>Tools</a>
                </li>
                <li>
                    <a>Mobile</a>
                </li>
                <li>
                    <a>Developers</a>
                </li>
                <li>
                    <a>Publishers</a>
                </li>
                <li id="nav-utility-lang">
                    <a>Language</a>
                    <!--<form name="languageSelectorForm>
                        <ul id="lang-list">
                        </ul>
                        <input />
                        <input />
                    </form>-->
                </li>
                <li class="last">
                    <a>SlideShare</a>
                </li>
            </ul>
            <ul class="nav-footer">
                <li>
                    <a>LinkedIn Updates</a>
                </li>
                <li>
                    <a>LinkedIn Influencers</a>
                </li>
                <li>
                    <a>LinkedIn Jobs</a>
                </li>
                <li>
                    <a>Jobs Directory</a>
                </li>
                <li>
                    <a>Company Directory</a>
                </li>
                <li>
                    <a>Groups Directory</a>
                </li>
                <li class="last">
                    <a>Title Directory</a>
                </li>
            </ul>
            <br />
            <p id="copyright" class="guest">
                <span>LinkedIn Coropation</span>
                <em>@ 2013</em>
            </p>
            <ul id="nav-legal">
            
                <li>
                    <a>User Agreement</a>
                </li>
                <li>
                    <a>Privacy Policy</a>
                </li>
                <li>
                    <a>Comunity Guidelines</a>
                </li>
                <li>
                    <a>Cookie Policy</a>
                </li>
                <li class="last">
                    <a>Copyright Policy</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
