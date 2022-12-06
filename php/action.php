<?php

require("conn.php");
// set var
if(isset($_POST['upload']) && isset($_FILES['song'])){
    
$artist = mysqli_real_escape_string($conn, $_POST['artist']);
$title = mysqli_real_escape_string($conn, $_POST['title']);

//fetch song and tmp_name

$song = $_FILES['song']['name'];
$tmp = $_FILES['song']['tmp_name'];
$folder = "../audios/";

//set new file

$newFile = $folder.$song;

//set tmp as new file

$move = move_uploaded_file($tmp, $newFile);
if($move){
    $stmt = mysqli_query($conn, "INSERT INTO lucidmusic (artist, title, path) VALUES ( '{$artist}', '{$title}', './audios/{$song}' ) ");
    if($stmt ){
        header('location:upload.php');
    }else{
        echo "stmt failed: $conn->error";
    }
//run mysql
}else{
    echo "failed to move song";
}

}else{
    echo "Please select a music file";
}
?>