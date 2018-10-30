
  <div id="loginModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header" style="background-color:#5C6BC0; color: white;">
          <img src="images/logo.png" width="50" height="50">
          <h3 class="modal-title mt-2">Login</h3>
          <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
       </div>
       <div class="modal-body">
         <form action="db.login.php" method="POST">      
           <input type="text" name="username" class="form-control" placeholder="Email/Phone/Username" required><br>
           <input type="password" name="password" class="form-control" placeholder="Password" required><br>
           <button type="submit" name="loginButton" class="btn float-right w-25" style="background-color:#5C6BC0; color: white;"> Login</button>
         </form><br><br>
         <a href="#" style="text-decoration: none; color:#5C6BC0;">Forgot Password?</a><br>
         <a href="#" data-toggle="modal" data-target="#SignupModal" style="text-decoration: none; color:#5C6BC0;">Register new membership</a>
            <?php

               if(isset($_GET['error'])==true){
                echo "<script language='javascript'>alert('Account Not Found!');</script>";
               }

             ?>
       </div>
     </div>
   </div>
 </div>

 <div id="SignupModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header" style="background-color:#5C6BC0; color: white;">
          <img src="images/logo.png" width="50" height="50">
          <h3 class="modal-title mt-2">Sign Up</h3>
          <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
       </div>
       <div class="modal-body">
         <form action="register.php" method="POST">      
           <input type="text" name="contact" class="form-control" placeholder="Phone Number" required><br>
           <input type="text" name="username" class="form-control" placeholder="Username" required><br>
           <input type="email" name="email" class="form-control" placeholder="Email" required><br>
           <input type="password" name="password" class="form-control" placeholder="Password" required><br>
           <input type="password" name="password2" class="form-control" placeholder="Confirm Password" required><br>
           <button type="submit" name="btnSignup" class="btn float-right w-25" style="background-color:#5C6BC0; color: white;"> Sign Up</button>
         </form><br><br><br>
         <p style="font-size:12px; text-align:center;">By signing up, you agree to Pee's Terms of Service  & Privacy Policy </p>
       </div>
     </div>
   </div>
 </div>
