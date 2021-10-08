<?php include('includes/auth.php');?>
<?php include('includes/music.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Profile | Music Sharing Platform</title>
</head>
<body>
    <center>
        <div class="editdiv">
        <?php user();?>
            <a class="musica" href="editprofile.php">Edit Profile</a>
            <a class="musica" href="addmusic.php">Add Music</a>
            <a class="musica" href="deletemusic.php">Delete Music</a>
            <a class="musica" href="logout.php">Logout</a><br>
            <div class="editspace">
            </div>
            <table class="edittable">
                <?php profile();?>
            </table>
        </div>
    </center>
</body>
</html>