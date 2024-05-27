<?php 

session_start();


//unset($_SESSION['branch']);
//unset($_SESSION['sem']);
//unset($_SESSION['subject']);

if(isset($_POST['submit']))
{
  $branch=$_POST['branch'];
  $sem=$_POST['sem'];
  $subject=$_POST['subject'];

  $_SESSION['branch']=$branch;
  $_SESSION['sem']=$sem;
  $_SESSION['subject']=$subject;

  if(!empty($_SESSION['branch']) && !empty($_SESSION['sem']) && !empty($_SESSION['subject'])){
    header('location:addquestion.php');
    exit();
  }
  
}

?>