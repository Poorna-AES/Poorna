<?php
session_start();
if(isset($_POST['uemail'])){
    include 'db.in.php';
    $email=mysqli_real_escape_string($conn,$_POST['nemail']);
    $pwd=mysqli_real_escape_string($conn,$_POST['pass']);
    if(empty($email)||empty($pwd)){
        header('LOCATION: profile.php?field=empty');
        exit();
    }
    else {
        $fsql="SELECT * FROM users WHERE u_id=". $_SESSION['u_id'].";";
        echo $fsql;
        $result = mysqli_query($conn,$fsql);
        if(mysqli_num_rows($result) <1)
        {
        
            session_unset();

            // destroy the session
            session_destroy();
            header('LOCATION: index.php?login=first');
        exit();
        }
        else{
            if( $row=mysqli_fetch_assoc($result)){
                if($pwd==$row['u_pwd']){
                    $sql="UPDATE users SET u_email='".$email."'WHERE u_id=". $_SESSION['u_id'].";";
                    if (mysqli_query($conn, $sql)) {
                        echo "Record updated successfully";
                        header('LOCATION: profile.php?uemail=success');
                    } else {
                        echo "Error updating record: " . mysqli_error($conn);
                        header('LOCATION: profile.php?uemail=failure');
                    }
                    
                }
                else {
                    header('LOCATION: profile.php?password=incorrect');
                }
            }        
        }
    }    
}
elseif(isset($_POST['upass'])){
    include 'db.in.php';
    $pwd=mysqli_real_escape_string($conn,$_POST['pass']);
    $npwd=mysqli_real_escape_string($conn,$_POST['np']);
    $cmnpwd=mysqli_real_escape_string($conn,$_POST['cnp']);
    if(empty($pwd)||empty($npwd)||empty($cmnpwd)){
        header('LOCATION: profile.php?field=empty');
        exit();
    }
    else {
        if($npwd!=$cmnpwd){
            header('LOCATION: profile.php?update=new_password_don\'t_match');
            exit();
         }
         else{
                $fsql="SELECT * FROM users WHERE u_id=". $_SESSION['u_id'].";";
            echo $fsql;
            $result = mysqli_query($conn,$fsql);
            if(mysqli_num_rows($result) <1)
            {
            
                session_unset();

                // destroy the session
                session_destroy();
                header('LOCATION: index.php?login=first');
            exit();
            }
            else{
                if( $row=mysqli_fetch_assoc($result)){
                    if($pwd==$row['u_pwd']){
                        $sql="UPDATE users SET u_pwd='".$npwd."'WHERE u_id=". $_SESSION['u_id'].";";
                        if (mysqli_query($conn, $sql)) {
                            echo "Record updated successfully";
                            header('LOCATION: profile.php?upass=success');
                        } else {
                            echo "Error updating record: " . mysqli_error($conn);
                            header('LOCATION: profile.php?upass=failure');
                        }
                        
                    }
                    else {
                        header('LOCATION: profile.php?password=incorrect');
                    }
                }        
            }
         }
    }
    
}
else {
    header('LOCATION: profile.php?update=error');
  exit();
}