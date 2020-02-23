<!DOCTYPE HTML>
<HTML>
    <HEAD>
    <TITLE></TITLE>
    <meta charset="UTF-8" />
    <META name="author" description="Dan DeCarlo"/>
    <link rel = "stylesheet" href = "stylesheetcairncongregation.css">
    </HEAD>
    <BODY>
        <header>
            <nav>
                <a href = "#">
                    <img src = "Highlander_logo.png" alt = "Cairn Highlander" >
                <ul>
                    <li><a href = "index.php">Home</li>
                    <li><a href = "#">Search</li>
                    <li><a href = "#">Donate</li>
                    <li><a href = "#">Profile</li>
                    <li><a href = "signup.php">Sign-up</a></li>
                </ul> 
                </a>
                <div class = "login_info">
                    <form action = "includes/login.inc.php" method = "post">
                        <input type = "text" name = "mailuid"  Placeholder = "Enter UserName">
                        <input type = "password" name = "pwd"  Placeholder = "Enter Password">
                        <button type = "submit" name = "login-submit">Login</button>
                    </form>
                    <form action = "includes/logout.inc.php" method = "post">
                        <button type = "submit" name = "logout-submit">Log Out</button>
                    </form>
                </div>         
            </nav>
        </header>