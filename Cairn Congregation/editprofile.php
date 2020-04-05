<?php
require "header.php"; //gets header navigation
include "includes/dbh.inc.php"; //includes DB connection
?>

<main>
      
      <div class = "signform">
      <h3>Edit Profile</h3>
        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class = errordisplay> Fill in all fields</p>';
                }
                else if($_GET['error'] == "spaceinusername"){
                    echo '<p class = errordisplay> Do not include spaces in username</p>';
                }
                else if($_GET['error'] == "invalidemail&userid"){
                    echo '<p class = errordisplay> Incorrect email or Username</p>';
                }
                else if($_GET['error'] == "passwordcheck"){
                    echo '<p class = errordisplay> Incorrect password</p>';
                }
                else if($_GET['error'] == "Usernametaken"){
                    echo '<p class = errordisplay> User name taken</p>';
                }
            }
            else if ($_GET['update'] == 'success'){ 
                echo '<p class = "successsignup"> Profile Updated</p>';
            }
            
        ?>
            <form action = "includes/editprofile.inc.php" method = "post" >
                    <input type = "text" name = "Euserid" placeholder = "UserName" id = "user"> <br> <br>
                    <input type = "text" name = "Eemail" placeholder = "Email" id = "email"> <br> <br>
                    <input type = "password" name = "Epswd" placeholder = "Password"> <br> <br>
                    <input type = "password" name = "Epswd2" placeholder = "Re-enter Password"> <br> <br>
                    <input type = "tel" name = "Ephonenumber" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder = 1234567890> <br> <br>
                    <input type = "text" name = "Eoccupation" placeholder = "Occupation" id = "occ"> <br> <br>
                    <input type = "number" name = "Eage" placeholder = "Age" id = "age"> <br> <br>
                    <button type = "submit" name = "update">Update Profile</button> 
            </form>
      </div>
    </main>

<?php
    require "footer.php";
?>       



