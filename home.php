
        <style>
            .hbody{
                height: 100%;
                width: 100%;
                
            }
            .event{
                border:2px solid rgb(4, 124, 40);
                height:100%;
                box-shadow: 1px 2px 2px 1px #44190e;
                border-radius: 3px;
                background-color: white;
            }
            .coll{
                border:2px solid rgb(4, 124, 40);
                height:250px;
                box-shadow: 1px 2px 2px 1px #44190e;
                border-radius: 3px;
                background-color: white;
            }
        </style>
    <div>    
        <div class="hbody">
            <div class="container">
                <div class="col-lg-12">
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="event col-lg-12" id="event">
                        <h2>
                            Events
                        </h2>
                        <hr>
                        <marquee direction="up" scrollamount="2" style="color:blue">
                            <strong><ul>
                                <?php
                                include 'db.in.php';
                                $esql="SELECT * FROM events WHERE 1;";
                                $tasks = mysqli_query($conn,$esql);
        
                                while ($row = mysqli_fetch_array($tasks)) { 
                                echo '<li>'.$row['e_event'].'</li>';
                                }

                                
                                ?>
                                
                            </ul></strong>
                        </marquee>
                        
                    </div>
                    <br><br>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class=" col-lg-6">
                        <div class="coll col-lg-12">
                            <h2>
                                Photo of Principal
                            </h2>
                            <hr>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-5">
                            <img src="principal.jpg"  style="height:120px;width: auto; " >
                            <div class="caption">
                                <p>Dr. Sehijpal Singh</p>
                              
                              </div>
                            </div>
                            <div class="col-lg-3"></div>
                            
                        </div> 
                        <br><br>   
                    </div>
                    <div class="col-lg-6">
                        <div class="coll col-lg-12">
                            <h2>
                                Achievements 
                            </h2>
                            <hr>
                            <strong>
                                <?php
                            $esql="SELECT * FROM achievements WHERE 1;";
                            $tasks = mysqli_query($conn,$esql); 
                
                            while ($row = mysqli_fetch_array($tasks)) { 
                                
                                echo $row['achi'].'<br>';

                            }
                            ?>
                        </strong>
                        </div>
                        <br><br>
                    </div>    
                    <div class="col-lg-12">
                        <br>
                    </div>
                    <div class=" col-lg-6">
                            <div class="coll col-lg-12" >
                                <h2>
                                    Principal's words
                                </h2>
                                <hr>
                                <strong style="text-align: justify;">
                                    <?php

                                        $psql="SELECT * FROM pri_word WHERE p_id=(SELECT MAX(p_id) FROM pri_word);";
                                                
                                        $tasks = mysqli_query($conn,$psql);
                                        if($row=mysqli_fetch_assoc($tasks)){
                                            echo $row['p_word'];
                                        }

                                    ?>
                                
                                </strong>
                            </div> 
                            <br><br>   
                    </div>
                    <div class="col-lg-6">
                            <div class="coll">
                                <img src="new_20june.gif" style="width: 100%;height: 100%;">
                            </div>
                            <br><br>
                    </div>
                        
                </div>  
                <div class="col-lg-12 col-md-12">
                       
                </div>          
            </div>

        </div>
    </div>   
   <br>
   <br>
   <br>