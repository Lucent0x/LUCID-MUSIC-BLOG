<?php

$conn = mysqli_connect('localhost', 'root', '', 'lucidity');
if($conn){

}else{
    die("couldn't connect $conn->error");
}