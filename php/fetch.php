<?php
require('conn.php');

$response = "";

$payload = mysqli_real_escape_string($conn, $_POST['payload']);

$stmt = mysqli_query($conn, " SELECT * FROM lucidmusic WHERE artist LIKE '%{$payload}%' OR title LIKE '%{$payload}%' ");
if($stmt){
    if(mysqli_num_rows($stmt) > 0 ){
        while( $result = mysqli_fetch_assoc($stmt )){
            $artist = $result['artist'];
            $title = $result['title'];
            $path = $result['path'];

            $response .= "
            <a href=\"$path\" download=\" $artist - $title \">
                <b>MP3 Download : </b>  $artist - $title  <i class=\"fas fa-download\"></i><br>
                <audio src=\"$path\" controls ></audio> 
            </a>
            ";
        }
    } else {
        $response = "Found no music related to your query";
     }
}

echo $response;
?>