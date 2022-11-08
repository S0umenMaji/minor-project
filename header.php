<?php
session_start();
echo '<header>
            <a href="index.php" class="logo">PadhloBeta <i class="fa-solid fa-book-open-reader"></i></a>
            <div id="menu" class="fas fa-bars"></div>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="#about-us">About</a>
                <a href="#courses">Courses</a>
                <a href="#gallery">Gallery</a>
                <a href="#reviews">Reviews</a>
                <a href="#contact-us">Contact Us</a>
                <a href="#members">Members</a>
                ';
                
                if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
                    echo '<a class="welcomeUser"><i class="fa fa-user" aria-hidden="true"></i>
                    <span class="tooltiptext">'.$_SESSION['session_user'].'</span></a>';
                    echo '<a href="logout.php" class="login-button">Logout</a>';
                }else{
                    echo '<a onclick='."popup('login-popup')".' class="login-button">Login</a>
                    <a onclick='."popup('register-popup')".' class="register-button">Register</a>';
                }
            echo "</nav>
        </header>";

include 'login_register.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']==true ){

echo '<div class="alert success">
<span class="closebtn-alert">&times;</span>  
<strong>Success!</strong> Account Created Successfully <i class="fa-regular fa-face-smile-wink"></i>
</div>';

}
if(isset($_GET['signupfailed']) && $_GET['signupfailed']==true ){
    
    echo '<div class="alert">
    <span class="closebtn-alert">&times;</span>  
    <strong>Sorry!</strong> Account Creation unsuccessful. Password '."Doesn't".' match <i class="fa-regular fa-face-sad-tear"></i>
  </div>';
    
}
if(isset($_GET['loginfailed']) && $_GET['loginfailed']==true ){
    
    echo '<div class="alert">
    <span class="closebtn-alert">&times;</span>  
    <strong>Sorry!!</strong> Login Failed <i class="fa-regular fa-face-sad-tear"></i> 
  </div>';
}
if(isset($_GET['emaildoesnotexists']) && $_GET['emaildoesnotexists']==true ){
    
    echo '<div class="alert">
    <span class="closebtn-alert">&times;</span>  
    <strong>Sorry!!</strong>Email Does'.'nt exists <i class="fa-regular fa-face-sad-tear"></i> 
  </div>';
}
if(isset($_GET['signupemailmatch'])&& $_GET['signupemailmatch']==true ){
    
    echo '<div class="alert">
    <span class="closebtn-alert">&times;</span>  
    <strong>Sorry!!</strong>Email Already Exists!! <i class="fa-regular fa-face-sad-tear"></i> 
  </div>';
}
if(isset($_GET['reviewfailed'])&& $_GET['reviewfailed']==true ){
    
    echo '<div class="alert">
    <span class="closebtn-alert">&times;</span>  
    <strong>Sorry!!</strong>Unable to add Review !!<i class="fa-regular fa-face-sad-tear"></i> 
  </div>';
}
if(isset($_GET['reviewsuccess']) && $_GET['reviewsuccess']==true ){

  echo '<div class="alert success">
  <span class="closebtn-alert">&times;</span>  
  <strong>Success!</strong> Review Added Successfully!!! <i class="fa-regular fa-face-smile-wink"></i>
  </div>';
  
  }
if(isset($_GET['coursereviewsuccess']) && $_GET['coursereviewsuccess']==true ){

  echo '<div class="alert success">
  <span class="closebtn-alert">&times;</span>  
  <strong>Success!</strong> Review Added Successfully!!! <i class="fa-regular fa-face-smile-wink"></i>
  </div>';
  
  }



























            echo '    <div class="popup-container" id="login-popup">
                       <div class=" popup">
                         <form action="login_register.php" method="POST">
                            <h2><span>USER LOGIN</span>
                           <button type="reset" onclick='."popup('login-popup')".'>X</button>
                           </h2>
                           <input type="text" placeholder="Email" name="login_email">
                           <input type="password" placeholder="Password" name="login_password">
                           <button class="login-btn" type="submit" name="login">LOGIN</button>
                         </form>
                       </div>
                      </div>
    <div class="popup-container" id="register-popup">
        <div class="register popup">
        <form action="login_register.php" method="POST">
                <h2><span>USER REGISTER</span>
                <button type="reset" onclick='."popup('register-popup')".'>X</button>
                </h2>
                <input type="text" placeholder="Full Name" name="fullname">
                <!-- <input type="text" placeholder="Username(Must be Unique)" name="username"> -->
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="password" placeholder="Confirm Password" name="cpassword">
                <button class="register-btn" type="submit" name="register">REGISTER</button>
            </form>
        </div>
    </div>


    
    <script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";
    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "250px";
        } else {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>
<script>
        function popup(popup_name)
        {
          get_popup=document.getElementById(popup_name);
          if(get_popup.style.display=="flex")
          {
            get_popup.style.display="none";
            
          }
          else
          {
            get_popup.style.display="flex";
          }
        }
      </script>
      <script>
var close = document.getElementsByClassName("closebtn-alert");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>';


      ?>