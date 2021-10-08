<?php include('includes/music.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Music | Music Sharing Platfrom</title>
</head>
<body>
    <center>
        <div class="addmusicdiv">
        <?php user();?>
            <a class="musica" href="editprofile.php">Edit Profile</a>
            <a class="musica" href="addmusic.php">Add Music</a>
            <a class="musica" href="deletemusic.php">Delete Music</a>
            <a class="musica" href="logout.php">Logout</a><br>
            <form class="addmusicform" action="includes/music.php" method="post" enctype="multipart/form-data">
                <input class="addmusicinp" type="text" name="title" placeholder="Music Title"><br>
                <input class="addmusicinp" type="text" name="description" placeholder="Music Description"><br>
                <select class="addmusicsel" name="category">
                    <option>Choose Category</option>
                    <option value="Action">Action</option>
                    <option value="Romantic">Romantic</option>
                    <option value="Horror">Horror</option>
                    <option value="Spanish">Kids</option><br>
                </select><br>
                <select class="addmusicsel" name="language">
                    <option>Choose Language</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Marathi">Marathi</option>
                    <option value="English">English</option>
                    <option value="Spanish">Spanish</option>
                </select><br>
                <input class="addmusicinp" type="file" name="music"><br>
                <input class="addmusicbtn" type="submit" name="addmusic" value="Submit">
            </form>
        </div>
    </center>
</body>
</html>