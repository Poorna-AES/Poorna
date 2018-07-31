<?php
session_start();
if(isset($_POST['submit'])){

    include 'db.in.php';
    $mname="";
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $mname=mysqli_real_escape_string($conn,$_POST['mname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $gen=mysqli_real_escape_string($conn,$_POST['gen']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $yop=mysqli_real_escape_string($conn,$_POST['yop']);
    $branch=mysqli_real_escape_string($conn,$_POST['branch']);
    $pwd=mysqli_real_escape_string($conn,$_POST['pass']);
    $cmpwd=mysqli_real_escape_string($conn,$_POST['cmpass']);


    if(empty($fname)||empty($lname)||empty($gen)||empty($email)||empty($yop)||empty($branch)||empty($pwd)||empty($cmpwd)){
        
        header('LOCATION: register.php?signup=empty_fields');
          exit();
      }
    else{
        if($pwd!=$cmpwd){
            header('LOCATION: register.php?signup=password_don\'t_match');
            exit();
         }
         else{
            if(0){
                //check for names format
            }

                else{
                        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        header('LOCATION: register.php?signup=invalid_email');
                        exit();
                        }
                        else{
                          //  echo "'$fname','$mname','$lname','$gen','$email','$yop','$branch','$pwd'";
                                    $sql="INSERT INTO users (u_fname,u_mname,u_lname,gender,u_email,yop,branch,u_pwd) VALUES ('$fname','$mname','$lname','$gen','$email','$yop','$branch','$pwd');";
                
                                    if (mysqli_query($conn, $sql)) {
                                        echo "New record created successfully";
                        
                                        $fsql="SELECT * FROM users where u_email=$email;";
                                        $result=mysqli_query($conn,$fsql);
                                        $_SESSION['u_id']= mysqli_insert_id($conn);
                        
                                        header('LOCATION: index.php?signup=success');
                                    }
                                    else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                    header('LOCATION: index.php?signup=failure');
                                    }
                        }
                }     
         }
    }
}    
 else{
        header('LOCATION: index.php');
        exit();
 }
     
     
 ?>