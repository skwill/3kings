<header id="top" class="header">
        <div class="text-vertical-center">
            <h1>3Kings Enterprises</h1>
            <h3>Product Orders Management System</h3>
            <div class="form">      
      <ul class="tab-group">        
        <li class="tab active"><a>Enter The System</a></li>
        <!-- <li class="tab "><a href="#signup">Register</a></li> -->
      </ul>
      
      <div class="tab-content">       
        <div id="login">   
              
          <form id="login-form" action="<?php echo base_url();?>dashboard/login" method="post">
          
          <div class="field-wrap">
            <p id="login-error"><?php echo $error;?></p>
            <input id="login-email" name="email" type="email"required autocomplete="off" placeholder="Email"/>
          </div>
          
          <div class="field-wrap">
            
            <input id="login-password" name="password" type="password"required autocomplete="off" placeholder="Password"/>
          </div><!-- 
          
          <p class="forgot"><a href="#">Forgot Password?</a></p> -->
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>

         <div id="signup">   
                   
          <form id="signup-form" onsubmit="return false" action="submit.php" autocomplete="off" method="post">
          
          
            <div class="field-wrap">
              
              <input id="username" name="username" type="text" required autocomplete="off" placeholder="Username"/>
            </div>           
          

          <div class="field-wrap">
            
            <input id="email" name="email" type="email"required autocomplete="off" placeholder="Email"/>
          </div>
          
          <div class="field-wrap">
            
            <input id="password" name="password" type="password"required autocomplete="off" placeholder="Password"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
            <!-- <form id="login-form" onsubmit="return false" action="submit.php" autocomplete="off" method="post" >	
				<input id="login-email" type="text" value="" placeholder="Your Email" name="email" />		
				<input id="login-password" type="password" value="" placeholder="Password" name="password" />		
				<button name="submit" type="submit" value="submit">Login</button>	
			</form> -->

        </div>
</header>
<!-- <div id="login-container">
	Login
	<form id="login-form" onsubmit="return false" action="submit.php" autocomplete="off" method="post" >	
		<input id="login-email" type="text" value="" placeholder="Your Email" name="email" />		
		<input id="login-password" type="password" value="" placeholder="Password" name="password" />		
		<button name="submit" type="submit" value="submit">Login</button>	
	</form>
</div>

<p id="register">Register Now</p>

<div id="reg-form-container">
	This is the form
	<form id="reg-form" onsubmit="return false" action="submit.php" autocomplete="off" method="post" >							
		<input id="username" type="text" value="" placeholder="Your User Name" name="username"/>
		<p id="username_error"></p>
		<input id="email" type="text" value="" placeholder="Your Email" name="email" />
		<p id="email_error"></p>
		<input id="password" type="password" value="" placeholder="Password" name="password" />
		<p id="password_error"></p>
		<button name="submit" type="submit" value="submit">Register</button>	
	</form>
</div> -->