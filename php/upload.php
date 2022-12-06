<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"  crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/index.css">
    <title>FOR ADMIN</title>
</head>
<body>
    <div class="form">
        <form action="action.php" method="post" enctype="multipart/form-data">
            <div class="input">
                <input type="text" name="artist" id="" placeholder="Artist name" />
            </div>
            <div class="input">
                <input type="text" name="title" id="" placeholder="Song title" />
            </div>
            <div class="input">
                <label for="song"> Choose Audio file pls. </label>
                <input type="file" name="song" id="song" />
            </div>
            <div class="input">
                <input type="submit" name="upload" id="btn" value="UPLOAD" />
            </div>
        </form>
    </div>
</body>
</html>