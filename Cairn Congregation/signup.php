<?php
    require "header.php";
?>
    <main>
       <h3>Sign up</h3>
       <form action = "includes/signup.inc.php" method = "post">
            <input type = "text" name = "userid" placeholder = "UserName">
            <input type = "text" name = "email" placeholder = "Email">
            <input type = "password" name = "pswd" placeholder = "Password">
            <input type = "password" name = "pswd2" placeholder = "Re-enter Password">
            <button type = "submit" name = "submit-newaccount">Create Account</button>
            <!-- maybe security question
            <input type = "text" name = "security question" placeholder = "Email">
            -->
        </form>

    </main>

<?php
    require "footer.php";
?>