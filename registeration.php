<?php

require_once 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registeration Page</title>
	<link rel="stylesheet" type="text/css" href="mytable.css">
</head>
<body>
	
 <fieldset id="user_login">
      <legend>New User Login</legend>
        <form method="post" action="registeration.php" autocomplete="off">
          <table id="user_table">
            <tr>
              <td>Name</td>
              <td><input type="text" name="name" required></td>
            </tr>
            <tr>
              <td>User Name</td>
              <td><input type="text" name="uname" required></td>
            </tr>
            <tr>
              <td>Email Id</td>
              <td><input type="email" name="email" required></td>
            </tr>
            <tr>
              <td>Phone Number</td>
              <td><input type="text" name="phoneno" required></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name="pass1" required></td>
              <td><i id="pass_err"></i></td>
            </tr>
            <tr>
              <td>Confirm Password</td>
              <td><input type="password" name="pass2" required></td>
            </tr>
              <td><input type="submit" id="sbtn" value="Save" name="submit"></td>
              <td><input type="reset" id="rbtn" value="Clear"></td>
            </tr>
            

          </table>
        </form>
    </fieldset>


<?php 
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $phoneno = $_POST["phoneno"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];

    if($name!=""&&$uname!=""&&$email!=""&&$phoneno!=""&&$pass1!=""&&$pass2!="")
    {
         if($pass1==$pass2)
         {
           $sql="INSERT INTO website(Name,UserName,EmailId,PhoneNumber,Pass,ConfirmPassword)
            VALUES('$name','$uname','$email','$phoneno','$pass1','$pass2')";
            $res=mysqli_query($con,$sql);
            
            
            	echo "member are joined";
         }
         else
         {
                 echo "confirm password and password must same";
                 return false;
         }
    }
    else
    {
    	echo "all the field required";
      return false;
    }
}


// $s = "select * from website where name = '$name' && uname = '$uname' && email = '$email' && phoneno = '$phoneno' && pass1 = '$pass1' && pass2 = '$pass2'";

// $result = mysqli_query($con, $s);




// if($num == 1){
// 	header('location:registeration.php');
// }else{
// 	header('location:registeration.php');
// }
// }








 ?>






</body>
</html>