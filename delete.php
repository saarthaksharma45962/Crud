<?php 
    //connecting to a database 
$username = "root";
$servername = "localhost";
$password = "";
$database = "new_crud";


// create a connection
$conn  = mysqli_connect($servername,$username,$password,$database);

$id = $_GET["ID"];


$del_query = "delete from person_details2 where ID = '$id' ";

$delete = mysqli_query($conn,$del_query);

if($delete){
       
    header("Location:redirect.php");

            }

?>