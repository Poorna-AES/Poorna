<?php
session_start();
if(isset($_POST['submit'])){

    include 'db.in.php';
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
    if(empty($email)||empty($pwd)){
      header('LOCATION: index.php?login=empty');
      exit();
    }
    else{
      $fsql="SELECT * FROM users WHERE u_email='$email';";
      echo $fsql;
      $result = mysqli_query($conn,$fsql);

    if(mysqli_num_rows($result) <1)
      {

      header('LOCATION: index.php?login=invalid');
        exit();
      }
      else{

        if( $row=mysqli_fetch_assoc($result)){
          if($pwd==$row['u_pwd']){
            $_SESSION['u_id']=$row['u_id'];
           header('LOCATION: index.php?login=success');
          }
          else{
           
            header('LOCATION: index.php?login=error');
          }
        }
      }
    }
}
else{
  header('LOCATION: index.php?login=error');
  exit();
}
