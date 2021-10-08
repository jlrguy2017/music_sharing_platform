<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register | Music Sharing Platfrom</title>
</head>
<body>
    <center>
        <div class="logindiv">
        <img class="logo" src="media/logo.png">
            <form class="loginform" action="includes/auth.php" method="post">
                <input class="logininp" type="text" name="name" placeholder="Full Name"><br>
                <input class="logininp" type="tel" name="phone" placeholder="Phone No."><br>
                <input class="logininp" type="email" name="email" placeholder="Email Id" ><br>
                <input class="logininp" type="password" name="passkey" placeholder="Password"><br>
                <input class="loginbtn" type="submit" name="register" value="Register">
            </form>
            <p>Already Registered? <a href="index.php">Login Now</a></p>
        </div>
    </center>
</body>
</html>