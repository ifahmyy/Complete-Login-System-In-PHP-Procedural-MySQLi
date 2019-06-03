<?php



if(isset($_POST['signup-submit']))

{

require 'dbh.inc.php';
$username=$_POST['uid'];
$email=$_POST['mail'];
$password=$_POST['pwd'];
$passwordRepeat=$_POST['pwd-repeat'];

if (empty($username)||empty($email)||empty($password)||empty($passwordRepeat))
 {

 header("location: ../signup.php?error=emtyfields&uid=".$username."&mail=".$email)  ;
 exit();
 }

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z-0-9]*$/", $username)) 
{
header("location: ../signup.php?error=invilmaild&uid");
	exit();

}


elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("location: ../signup.php?error=invilmaild&uid=".$username);
	exit();
}
elseif (!preg_match("/^[a-zA-Z-0-9]*$/", $username))
 {
	header("location: ../signup.php?error=invilduid&uid=".$email);
	exit();
 }
   elseif ($password !== $passwordRepeat)
    {
   header("location: ../signup.php?error=passwordcheckuid=".$username ."&email".$email);
	exit();
    }

    else 


    {
        $sql= "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt= mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql))
         {
         	header("location: ../signup.php?error=sqlerror");
	      exit();
         }
         else 

         {

         	mysqli_stmt_bind_parm($stmt, "s", $username);
         	mysqli_stmt_execute($stmt);
         	mysqli_stmt_store_result($stmt);
            $resultCheck=mysqli_stmt_num_rows($stmt);
            if ($resultCheck >0)
            {
                header("location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
            else

            {

                $sql ="INSERT INTO users (uidUsers,EmailUsers, pwdUsers) VALUES (?,?,?)";
               $stmt = mysqli_stmt_init($conn);
                   if (!mysqli_stmt_prepare($stmt,$sql))
         {
            header("location: ../signup.php?error=sqlerror");
          exit();
         }
             else
             {


            mysqli_stmt_bind_parm($stmt, "sss", $username, $email , $password);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
             }

            }
         }
    }


}


