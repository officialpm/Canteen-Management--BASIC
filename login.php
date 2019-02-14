<?php
   include("config.php");
   session_start();

   if(isset($_POST['admin']))
   {
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT username FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      if($count >= 1) {
        $error = "Your Login Name or Password is valid";
   
        echo "<script type='text/javascript'>  window.location='aw.php'; </script>";
        // session_register("myusername");
       //  $_SESSION['login_user'] = $myusername;
        // header("location: welcome.html"); /* Redirect browser */
     
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   }

if(isset($_POST['user']))
{
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT user_name FROM users WHERE user_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      if($count >= 1) {
        $error = "Your Login Name or Password is valid";
        echo "<script type='text/javascript'>  window.location='user.php'; </script>";
        // session_register("myusername");
       //  $_SESSION['login_user'] = $myusername;
        // header("location: welcome.html"); /* Redirect browser */
     
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
}



if(isset($_POST['worker']))
{
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT user_name FROM workers WHERE user_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      if($count >= 1) {
        $error = "Your Login Name or Password is valid";
        
        echo "<script type='text/javascript'>  window.location='ww.php'; </script>";
        // session_register("myusername");
       //  $_SESSION['login_user'] = $myusername;
        // header("location: welcome.html"); /* Redirect browser */
     
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
}

if(isset($_POST['cook']))
{
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT user_name FROM cook WHERE user_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      if($count >= 1) {
        $error = "Your Login Name or Password is valid";
        
        echo "<script type='text/javascript'>  window.location='welcome.php'; </script>";
        // session_register("myusername");
       //  $_SESSION['login_user'] = $myusername;
        // header("location: welcome.html"); /* Redirect browser */
     
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
}

?>
<html>
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;">
              <b>Login</b>
            </div>
            <div style = "color:#FFFFFF; padding:3px;"><b> <a href="/4/usignup.php">User Signup</b></a>
            </div>
            
       
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Username :<br></label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :<br></label><input type = "password" name = "password" class = "box" /><br/><br />
                    <input type="radio" name="admin" id="red" value="admin">Admin<br>
                   <input type="radio" name="worker" value="worker">Worker<br>
                     
                  
                 
  <input type="radio" name="user" value="user" >User<br>
                   
                  <input type = "submit" value = " Submit "/><br />
                    
                    
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
