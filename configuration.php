<?php
ob_start();
include 'header.php';

if(isset($_SESSION['u_id'])){

        include 'db.in.php';
       
        $fsql="SELECT * FROM admin WHERE ad_id=". $_SESSION['u_id'].";";
        $result = mysqli_query($conn,$fsql); 
         
        if(mysqli_num_rows($result) <1){

           header('LOCATION: index.php?user=unauthorized');
               exit();
        }
        else{?>


        <div style="border: 1px solid rgb(221, 220, 220);border-radius: 3px; padding: 25px; background-color:white;box-shadow: 1px 3px 3px 1px rgb(163, 160, 160);">
         events <br>
         <hr>
            
                  
<form method="post" action="configuration.php" >
<textarea name="event" ></textarea><button type="submit" name="subadd"  >Add Task</button>
</form><?php 

if (isset($_POST['subadd'])) {
    if (!empty($_POST['event'])) {
        
        $sql = "INSERT INTO events (e_event) VALUES ('".$_POST['event']."')";
        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
        }
        else {
            //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        header('location: configuration.php');

    }
}
           
           $esql="SELECT * FROM events WHERE 1;";
           
           
		
		$tasks = mysqli_query($conn,$esql);

        ?></form>

        <table>
            <thead>
                <tr>
                    <th>N </th>
                    <th> Tasks </th>
                    <th style="width: 60px;"> Action</th>
                </tr>
            </thead> <tbody><?php 
              
               $i=1;
        
                while ($row = mysqli_fetch_array($tasks)) { ?><tr><td><?php echo $i; ?></td><td><?php echo $row['e_event']; ?></td><td><a href="configuration.php?del_event=<?php echo $row['e_id'] ?>">x</a> </td> </tr><?php $i++; } ?></tbody>
        </table><?php

        if (isset($_GET['del_event'])) {
            $id = $_GET['del_event'];

            mysqli_query($conn, "DELETE FROM events WHERE e_id=".$id);
            header('location: configuration.php');
        }


        //EVENTS done
        //achievements
        echo '</div><br><div style="border: 1px solid rgb(221, 220, 220);border-radius: 3px; padding: 25px; background-color:white;box-shadow: 1px 3px 3px 1px rgb(163, 160, 160);"><br>achievements<br><hr><form method="post" action="configuration.php"><textarea name="ach"></textarea><button type="submit" name="addach">Add Task</button></form>'; 
        
        if (isset($_POST['addach'])) {
            if (!empty($_POST['ach'])) {
                
                $sql = "INSERT INTO achievements (achi) VALUES ('".$_POST['ach']."')";
                if (mysqli_query($conn, $sql)) {
                    //echo "New record created successfully";
                }
                else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                header('location: configuration.php');
        
            }
        }
                   
                   $esql="SELECT * FROM achievements WHERE 1;";
                   
                   
                
                $tasks = mysqli_query($conn,$esql);
        
                echo'</form><table><thead><tr><th>N </th><th> Tasks </th><th style="width: 60px;"> Action</th></tr></thead> <tbody>'; 
                      
                       $i=1;
                
                        while ($row = mysqli_fetch_array($tasks)) { echo'<tr><td> '.$i.'</td><td>'.$row['achi'].'</td><td><a href="configuration.php?del_ach='.$row['ac_id'].'">x</a> </td> </tr>';
                         $i++; } 
                         echo'</tbody></table></div>';
        
                if (isset($_GET['del_ach'])) {
                    $id = $_GET['del_ach'];
        
                    mysqli_query($conn, "DELETE FROM achievements WHERE ac_id=".$id);
                    header('location: configuration.php');
                }

                echo'<br><div style="border: 1px solid rgb(221, 220, 220);border-radius: 3px; padding: 25px; background-color:white;box-shadow: 1px 3px 3px 1px rgb(163, 160, 160);">
                
                Principal\'s words 
                <hr><form  method="post" action="configuration.php"><textarea name="pword" style="height:130px;width:350px;" >';
                $psql="SELECT * FROM pri_word WHERE p_id=(SELECT MAX(p_id) FROM pri_word);";
           
                $tasks = mysqli_query($conn,$psql);
                if($row=mysqli_fetch_assoc($tasks)){
                    echo $row['p_word'];
                }
                echo '</textarea> 
                
                <button type="submit" name="update"  >Update</button>

                </form>';
                if (isset($_POST['update'])) {
                    if (!empty($_POST['pword'])) {
                        
                        $sql = "INSERT INTO pri_word (p_word) VALUES ('".$_POST['pword']."')";
                        if (mysqli_query($conn, $sql)) {
                            //echo "New record created successfully";
                        }
                        else {
                            //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        header('location: configuration.php');
                
                    }
                }
                

                
                
               echo'</div><br>';

               echo '<div style="border: 1px solid rgb(221, 220, 220);border-radius: 3px; padding: 25px; background-color:white;box-shadow: 1px 3px 3px 1px rgb(163, 160, 160);">
                Principal\'s Photo';
                

                echo'</div>';
    }

}
else {
    # code...
    header('LOCATION: index.php?login=error');
  exit();
}
ob_end_flush();
?>