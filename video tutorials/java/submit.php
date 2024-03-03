<?php 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'projectdatabase');

 if (isset($_POST['submit'])) 
 {
    $_SESSION['vid']=$_GET['video_id'];
    $video_id=$_GET['video_id'];

    $q="UPDATE 'courses' SET 'notes' WHERE id='$course_id'";
    $result=mysqli_query($con,$q);

 }
 





 
 ?>
