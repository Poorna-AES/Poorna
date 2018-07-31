<?php
include 'header.php';

if(isset($_SESSION['u_id'])){
    include 'db.in.php';
    $fsql="SELECT * FROM users where u_id=".$_SESSION['u_id'].";";
    $result=mysqli_query($conn,$fsql);
    $row = mysqli_fetch_assoc($result);
?>
<br><br>
        <div class="container">
                <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">

                </div>
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-10" style="border: 1px solid rgb(221, 220, 220);border-radius: 3px;padding: 25px; background-color:white;box-shadow: 1px 3px 3px 1px rgb(163, 160, 160)">
                    <h2>
                   <img src="grad_hat.png" style="width:50px;height:50px;"> Alumni Details
                </h2>
                <hr>
                <h3>
                    Name 
                </h3>
                <?php
                echo $row["u_fname"]." ".$row["u_mname"]." ".$row["u_lname"];
                ?>
                <br>
                <br>
                <?php
                    if($row["gender"]=='m'){
                        echo 'Male';
                    }
                    elseif ($row["gender"]=='f') {
                        echo 'Female';
                    }
                    else{
                        echo 'Other';
                    }
                ?>
                <h3>
                    Email <small style="color: black;"><span type="buttom" class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#Modalemail" ></span></small> 
                </h3> 
                                <div class="modal fade" id="Modalemail" role="dialog">
                        <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                    <form action="update.php" method="POST">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Email</h4>
                        </div>
                        <div class="modal-body">
                        <p>Plz provide your Passsword</p>
                        <input type="password" class="form-control " name="pass" placeholder="Password" required>
                        <hr>
                        <p>New Email</p>
                        <input type="email" name="nemail" class="form-control" placeholder="New Email" required>
                        
                        </div>
                        <div class="modal-footer">
                        <button type="submit" name="uemail" class="btn btn-success" style="float:left;">Change</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>    
                    </div>
                    
                    </div>
                </div>              
                <?php
                echo $row["u_email"];
                ?>
                
                <h3>
                    Branch 
                </h3>
                <?php
                echo $row["branch"];
                ?>
                <h3>
                    Year of Passing
                </h3>
                <?php
                echo $row["yop"];
                ?>
                <br>
                <br>
                <h4>
                    Change password here <small style="color: black;"><span type="buttom" class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#Modalpass"></span></small>
                </h4>
                <div class="modal fade" id="Modalpass" role="dialog">
        <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          <form action="update.php" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body">
        <p>Old Passsword</p>
        <input type="password" class="form-control " name="pass" placeholder="Password" required>
        <hr>
          <p>New Password</p>
          <input type="password" class="form-control " name="np" placeholder="Password" required>
          <p>Confirm Password</p>
          <input type="password" class="form-control " name="cnp" placeholder="re-type Password" required>
        </div>
        <div class="modal-footer">
        <button type="submit" name="upass" class="btn btn-success" style="float:left;">Change</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div> 
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">

                </div>
</div>
<br><br><br>    
<?php
}
else
{
    header('LOCATION: index.php?profile_view=error');
        exit();
}

?>

<?php
include 'footer.html';
?>