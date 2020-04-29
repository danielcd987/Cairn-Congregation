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
            else if (isset($_GET['updateprofile'])){ 
                echo $_GET['updateprofile'];
                if($_GET['updateprofile'] == "success"){
                    echo '<p class = "successsignup"> Profile Updated</p>';
                }
            }
            // else if ($_GET['updateprofile'] == 'success'){ 
            //     echo '<p class = "successsignup"> Profile Updated</p>';
            // }
        ?>

        <!-- displays users id number -->
        <!-- <?php
            
            // $sql = "SELECT id_users FROM users";
            // $results = mysqli_query($conn, $sql);
            // $RESULTCHECK = mysqli_num_rows($results);

            // if($RESULTCHECK > 0){
            //     while($row = mysqli_fetch_assoc($results)){ //have the search results go to profile
            //         echo "<p>Your ID Number is:</p>".$row['id_users'];
            //     }
            // }
    ?> -->
            <form action = "includes/editprofile.inc.php" method = "post" >
                    <input name = "id_user" placeholder = "ID Number" id = "IdNum" value = "<?php echo $_SESSION['userId']; ?>" hidden >  <br> <br>
                    <input type = "text" name = "userid" placeholder = "UserName" id = "user"> <br> <br>
                    <input type = "text" name = "email" placeholder = "Email" id = "email" value = "<?php echo $_SESSION['email']; ?>"> <br> <br>
                    <input type = "password" name = "pswd" placeholder = "Password"> <br> <br>
                    <input type = "password" name = "pswd2" placeholder = "Re-enter Password"> <br> <br>
                    <input type = "tel" name = "phonenumber" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder = "Enter Phone Number" value = "<?php echo  $_SESSION['phonenumber']; ?>" > <br> <br>
                    <input type = "text" name = "occupation" placeholder = "Occupation" id = "occ" value = "<?php echo  $_SESSION['occupation']; ?>"> <br> <br>
                    <input type = "number" name = "age" placeholder = "Age" id = "age" value = "<?php echo  $_SESSION['ages']; ?>" > <br> <br>
                    <button type = "submit" name = "update">Update Profile</button> 
            </form>
      </div>
    </main>

<?php
    require "footer.php";
?>       

<!-- https://www.youtube.com/watch?v=YcLHapPnDQg  this video showed me how to update -->

