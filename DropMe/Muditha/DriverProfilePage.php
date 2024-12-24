<!DOCTYPE html>
<html>
   <head					>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>DropME</title>
      <link rel="stylesheet" href="styles/styles.css">
      <link rel="stylesheet" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <script defer src="scripts/scripts.js"></script>
   </head>

   <body>
      <div class="mainContainer">
         <header>
            <div>
               <div class="logo"><img src="src/images/bus-logo.webp" width="100px"></div>
               <h1 class="header-title">DropMe</h1>
               <div class="profile"><img src="src/images/User.png" width="100px"></div><br>
            </div>
               <div class="mainDi">
               <div class="nav"><nav class="navigation">
                  <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#">Reserve</a></li>
                     <li><a href="#">Ticket</a></li>
                     <li><a href="#">Contact US</a></li>
                     <li><a href="#">About Us</a></li>
                  </ul>
               </nav></div>
            </div>
         </header>
   
         <div class="profile-container">
            <img src="src/images/User.png" width="100px" alt="User Profile Picture" >
         
            <form action="updateProfile.php" method= "POST">
               <label>First Name :</label>
               <input type="text" value="<?php echo "$fName" ?>" name="fName" readonly><br><br>
                  
               <label>Last Name:</label>
               <input type="text" value="<?php echo "$lName" ?>" name="lName"><br><br>	
               
               <label>Mobile Number :</label>
               <input type="phone" value="<?php echo "$mNo" ?>" name="mNo"><br>
               
               <label>Address :</label>
               <textarea name="address" rows="3" columns="10" value="<?php echo "$address" ?>"></textarea><br>
               
               <label>Date of Birth :</label>
               <input type="date" value="<?php echo "$dob" ?>" name="dob"><br>

               <label>Username :</label>
               <input type="text" value="<?php echo "$uName" ?>" name="uName"><br>
               
               <label for="pwd">Password :</label>
               <input type="password" value="<?php echo "$pwd" ?>" name="pwd"><br>
               
               <label for="ConPwd">Confirm Password :</label>
               <input type="password" value="<?php echo "$rePwd" ?>" name="rePwd"><br>
               
               <label>Licence No :</label>
               <input type="text" value="<?php echo "$lice" ?>" name="lice"><br>
      
               <label>Experience :</label>
               <input type="text" value="<?php echo "$Exp" ?>" name="Exp"><br>
               
               <input type="submit" value="Update profile">

            </form>
            
         </div>
      </div>

      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="footer-col">
                  <h4>Contact</h4>
                  <ul>
                     <li><a href="#">+94123456789</a></li>
                     <li><a href="#">+94812345679</a></li>
                     <li><a href="#">someone@gmail.com</a></li>
                  </ul>
               </div>
               <div class="footer-col">
                  <h4>Quick Access</h4>
                  <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#">Reserve</a></li>
                     <li><a href="#">Ticket</a></li>
                     <li><a href="#">Contact Us</a></li>
                     <li><a href="#">About US</a></li>
                  </ul>
               </div>
               <div class="footer-col">
                  <h4>Follow Us</h4>
                  <div class="social-links">
                     <div class="fb">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                     </div>
                     <div class="tw">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                     </div>
                     <div class="ig">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                     </div>
                     <div class="ln">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </body>
</html>