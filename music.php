<?php include('includes/music.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>All Music | Music Sharing Platfrom</title>
</head>
<body>
    <center>
        <div class="musicdiv">
        <?php user();?>
            <a class="musica" href="editprofile.php">Edit Profile</a>
            <a class="musica" href="addmusic.php">Add Music</a>
            <a class="musica" href="deletemusic.php">Delete Music</a>
            <a class="musica" href="logout.php">Logout</a><br>
            <table class="musictable">
            <form class="musicform" action="search.php" method="post">
                <select class="musicinp" name="language">
                    <option>Choose Language</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Marathi">Marathi</option>
                    <option value="English">English</option>
                    <option value="Spanish">Spanish</option>
                </select>
                <input class="musicbtn" type="submit" name="search" value="Filter">
            </form>
                <tr class="musictr">
                    <th class="musicth">Music Name</th>
                    <th class="musicth">Category</th>
                    <th class="musicth">Language</th>
                    <th class="musicth">Play</th>
                    <th class="musicth">Download</th>
                </tr>
                <?php music();?>
            </table>
        </div>
    </center>
</body>
</html>