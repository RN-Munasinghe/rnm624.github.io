<?php
    include("connectionregi.php")
?>
   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>
    <div class="form-wrapper sign-up">
        <form action="#" method="post">
            <h2>Sign Up</h2>
            <div class="input-group">
                <input type="text" required name="username">
                <label for="">Username</label>
            </div>
            <div class="input-group">
                <input type="email" required name="email">
                <label for="">Email</label>
            </div>
            <div class="input-group">
                <input type="password" required name="newpassword">
                <label for="">New Password</label>
            </div>
            <div class="input-group">
                <input type="password" required name="conpassword">
                <label for="">Confirm Password</label>
            </div>
            <div class="remember">
                <label for=""><input type="checkbox">I agree to the terms and conditions</label>
            </div>
            <button type="submit"><a href="http://localhost/portfolio/index.php">Sign Up</a></button>
            
        </form>
    </div>

    </body>


</html>

<?php  
			if(isset($_POST["submit"]))
			{

				$fullname= $_POST["username"];
				$email = $_POST["email"];
				$mobilenumber = $_POST["newpassword"];
				$emailsubject = $_POST["conpassword"];



			$query = "INSERT INTO signup VALUES ('$username','$email','$newpassword','$conpassword')";

			$data = mysqli_query($conn, $query);

				if($data)
				{
				    echo "Data Inserted into Database";
				}
				else
				{
				    echo "Failed";
				}

			}
            $conn->close();
	?>