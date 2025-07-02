<?php 
$server = "localhost";
$user="root";
$pass ="";
$database="image";

$conn=mysqli_connect($server,$user,$pass,$database );


if(isSet($_POST['send'])){
    $image=mysqli_real_escape_string($conn,$_POST["image"]);
    $des=mysqli_real_escape_string($conn,$_POST["des"]);
    $owner=mysqli_real_escape_string($conn,$_POST["owner"]);

   
   $Q="INSERT INTO allimages(photo,des,owner)VALUES('$image','$des','$owner')";
   
   If(mysqli_query($conn,$Q)){
     header("location:display.php");
}
}

if(ISSET($_POST['submit'])){
  
    $ID=$_POST['i'];
    $image=$_POST["image"];
    $des=$_POST["des"];
    $owner=$_POST["owner"];


    $q="UPDATE allimages SET photo='$image',des='$des', owner='$owner' WHERE ID='$ID'";
    if(mysqli_query($conn,$q)){
      header("location:display.php");
    }    
   }
?>













