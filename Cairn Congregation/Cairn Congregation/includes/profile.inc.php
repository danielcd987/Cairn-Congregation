<?php
include 'includes/dbh.inc.php'

?>
<?php
//this displays the users profile information
    if(isset($_SESSION['userUid'])){
     $userprofile = ($_SESSION['userUid']); //userUid refrences the username in login.inc
     //$sql="SELECT * FROM member where mem_id=$loggedin_id";
     $sqls = "SELECT * FROM users WHERE UserNames = '$userprofile';"; //gets results from database
        $results = mysqli_query($conn, $sqls); //connects and displays 
        $queryresults = mysqli_num_rows($results); //checks rows and results

            if( $userprofile == $_SESSION['userUid']){
                while($row = mysqli_fetch_assoc($results)){         //contains data from results in database
                    //if there are users it checks if there is an image in folder
                    $id = $row['id_users'];
                    $sqlpic = "SELECT * FROM profilepic WHERE id_users = '$id';"; 
                    $resultspic = mysqli_query($conn, $sqlpic); //connects and displays 
                    //upload profile pic
                        while($rowpic = mysqli_fetch_assoc($resultspic)){
                            echo"<div>";
                                if($rowpic['status'] == 0){
                                    echo "<img src ='uploads/profile".$id."gif'>";
                                }
                                else{
                                    echo "<img src ='uploads/profilepic.gif'>";
                                }
                                echo $row['UserNames'];
                            echo"</div>";
                        }
                        if(mysqli_num_rows($results) > 0 ){
                            while($rowpic = mysqli_fetch_assoc($results)){
                            $userid = $rowpic['id_users'];
                            $sql = "INSERT INTO profilepics (userid, status) VALUES ('$userid', 1)";
                            mysqli_query($conn, $sql);
                            header("Location: index.php");
                            }
                        }
                        else{
                            echo "there is an error";
                        } 
                    
                    echo 
                    //displays in a table
                    
                        "<div class = 'searchlist'>
                        <table class = 'profileresults'>
                                <tr>
                                    <th>UserName:</th>
                                    <th>Email:</th>
                                    <th>Phone Number:</th>
                                    <th>Occupation:</th>
                                    <th>Age:</th>
                                </tr>
                                <tr>
                                    <td><h5 class = 'records'>".$row['UserNames']."</h5></td>
                                    <td><h5 class = 'records'>".$row['email_users']."</h5></td>
                                    <td><h5 class = 'records'>".$row['phonenum']."</h5></td>
                                    <td><h5 class = 'records'>".$row['occ']."</h5></td>
                                    <td><h5 class = 'records'>".$row['age']."</h5></td>
                                </tr>
                            </table>
                    
                            <ul>
                                <li class = 'profileresults'><h5 class = 'profileresults'>".$row['UserNames']."</h5></td></li>
                                <li class = 'profileresults'><td><h5 class = 'profileresults'>".$row['email_users']."</h5></td></li>
                                <li class = 'profileresults'><td><h5 class = 'profileresults'>".$row['phonenum']."</h5></td></li>
                                <li class = 'profileresults'><td><h5 class = 'profileresults'>".$row['occ']."</h5></td></li>
                                <li class = 'profileresults'><td><h5 class = 'profileresults'>".$row['age']."</h5></td></li>
                            </ul>
                        </div>";
                }
            }
           
    }
?>

