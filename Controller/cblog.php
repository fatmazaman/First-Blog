<?php 
include ('../Model/blog.php');

 $name=$_POST['name'];
 $title=$_POST['title'];
 $blog=$_POST['blog'];

 insertdata($name,$title,$blog);
 header("location:../public/disblog.php");




?>
