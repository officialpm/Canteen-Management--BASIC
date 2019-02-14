<?php

 include("config.php");
   session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $error="";
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      //$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT user_name FROM users WHERE user_name = '$myusername'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      if($count >= 1) {
        $error =  " $myusername is deleted";
        $sql = "DELETE FROM workers WHERE user_name='$myusername'";
        mysqli_query($db,$sql);
      
        
        // session_register("myusername");
       //  $_SESSION['login_user'] = $myusername;
        // header("location: welcome.html"); /* Redirect browser */
     
      }else {
         $error = "Your Username is invalid";
      }
   }
?>
<html>
   
   <head>
  
      
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
	
      
               <form action = "" method = "post">
                  <label>Username  :  </label><input type = "text" name = "username" class = "box"/><br /><br />
            
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>		
            </div>	
         </div>
      </div>
   </body>
</html>