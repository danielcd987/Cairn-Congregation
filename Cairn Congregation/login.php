<?php
    require "header.php";
?>

<main>
 <div class = "login_info">
 <?php
    if(isset($_SESSION['userId'])){
        echo "<p>YOU ARE LOGGED IN!</p>";
    }
    else{
        echo "<p>YOU ARE LOGGED OUT!</p>";
    }

?>
  <?php
        if(isset($_SESSION['userId'])){
            echo '<form action = "includes/logout.inc.php" method = "post">
                         <button type = "submit" name = "logout-submit">Log Out</button>
                </form>';
            echo '<br>';
        }
        else{
            echo' <form action = "includes/login.inc.php" method = "post">
                        <div class = "loginfield">
                            <input type = "text" name = "mailuid"  Placeholder = "Enter UserName">
                            <input type = "password" name = "pwd"  Placeholder = "Enter Password">
                            <button type = "submit" name = "login-submit">Login</button>
                        </div>
                    </form>';
            echo '<br>';
        }
    ?>
    <!-- <form action = "includes/login.inc.php" method = "post">
         <div class = "loginfield">
            <input type = "text" name = "mailuid"  Placeholder = "Enter UserName">
            <input type = "password" name = "pwd"  Placeholder = "Enter Password">
            <button type = "submit" name = "login-submit">Login</button>
            </div>
    </form>
        <a href = "signup.php" class = "header-signup"></a>
        <form action = "includes/logout.inc.php" method = "post">
            <button type = "submit" name = "logout-submit">Log Out</button>
        </form> -->
</div>
<p>If you don't have a profile please go to the <a href = "signup.php">sign up</a> page.</p>
</main>

<?php

require "footer.php"
?>