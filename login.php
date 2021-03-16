<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login form</h1>
    <hr/>
        <form action="login.php" method="post">
        <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text"  name="name" ></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td colspan="2" >
                        <input type="submit" name="register" value="Register">
                        <input type="button" value="Refresh"> 
                    </td>
                </tr>
        </table>
        </form>
</body>
</html>


<?php
    $uname = $password = $unameErr = $passwordErr ="";
    $userName = $password = "";
    $flag = 0;
    

    if ($_SERVER["REQUEST_METHOD"] =="POST" )
    {
        if(empty($_POST['uname'])) 

            {
                $unameErr = "Please Fill Up the UserName";
            }
            else
            {
                $uname = $_POST['uname'];
            }

        if(empty($_POST['password'])) 

            {
                $passwordErr = "Please Fill Up the Password";
            }
            else
            {
                $password = $_POST['password'];
            }


            $filepath = "data.txt";
            $f = fopen($filepath,'r') or die("fail to open file");
            
            


            while (!feof($f))
            {
                $line = fgets($f);
                $json_decoded_text = json_decode($line,true);
                $userName = $json_decoded_text['userName'];
                $password = $json_decoded_text['password'];


                if($userName == $uname && $password == $password){
                    $flag++;
                    break;
                }
        
              
        
            }
        
            if ($flag>0)
            {
                $msg = "Successful";
                echo $msg;
                echo "<br>";
        
                $_SESSION['userId'] = $uname;
                $_SESSION['password'] = $password;
            
                echo "User Id is: " . $_SESSION['userId'];
                echo "<br>";
                echo "Password is: " . $_SESSION['password'];
            }
        
            else
            {
                $msg = "Try Again";
                echo "Unsuccessful! " .$msg;
            }
                
                
            }

            


    



    //fclose($f);
    session_unset();
    session_destroy();
?>