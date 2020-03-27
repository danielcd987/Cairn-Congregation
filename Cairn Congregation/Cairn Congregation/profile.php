<?php
require "header.php"; //gets header navigation
include "includes/dbh.inc.php"; //includes DB connection
include "includes/edit.inc.php";
//check to see if logged in
    if(isset($_SESSION['userId'])){
        echo "<p>YOU ARE LOGGED IN!</p>";
    }
    else{
        echo "<p>YOU ARE LOGGED OUT!</p>";
    }
?>
<?php
        if(isset($_SESSION['userId'])){ //if user is logged in
            echo '
            <main>
            <br>
                <form action = "includes/edit.inc.php"> 
                    <button name = "edit">Edit Profile</button>
                </form>          
            </main>';
            
            /*this displays the form that uploads pictures*/ 
            echo'<br>
                <form action = "uploads.php" method = "POST" enctype = "multipart/form-data"> <!--images-->
                    <input type = "file" name = "uploadfile">
                    <button type = "submit" name = "submitfile">Upload</button>
                </form>';
            echo '<br>';
        }
        else{
            echo'<p>You need to <a href = "login.php">login</a> to view you account.</p>';
            echo'<p>If you do not have an account and would like one please <a href = "signup.php">sign up.</a></p>';
            echo '<br>';
        }
    ?>
    


<?php
    include "includes/profile.inc.php";
    require "footer.php";
?>