<?php include('includes/music.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Delete Music | Music Sharing Platfrom</title>
</head>
<body>
    <center>
        <div class="deletediv">
        <?php user();?>
            <a class="musica" href="editprofile.php">Edit Profile</a>
            <a class="musica" href="addmusic.php">Add Music</a>
            <a class="musica" href="deletemusic.php">Delete Music</a>
            <a class="musica" href="logout.php">Logout</a><br>
            <table class="deletetable">
                <tr class="deletetr">
                    <th class="deleteth">Music Name</th>
                    <th class="deleteth">Category</th>
                    <th class="deleteth">Language</th>
                    <th class="deleteth">Play</th>
                    <th class="deleteth">Delete</th>
                </tr>
                <?php deletemusic();?>
            </table>
        </div>
    </center>
</body>
</html>