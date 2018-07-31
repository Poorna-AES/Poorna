<?php
include 'header.php';

if(!isset($_SESSION['u_id'])){
?>


   
    <body style="background-color:rgb(245, 245, 245);">
        

        <br><br>
        <div class="container">
                <div class="col-xs-1">

                </div>
                <div class="col-xs-10" style="border: 1px solid rgb(221, 220, 220);border-radius: 3px;padding: 25px; background-color:white;box-shadow: 1px 3px 3px 1px rgb(163, 160, 160)">
                    <h2>
                   <img src="grad_hat.png" style="width:50px;height:50px;"> Alumni Registration
                </h2>
                <hr>
                <form action="submit.php" method="post" id="myForm">
                   <div class="form-group col-xs-12">
                      <h4>Name:</h4> 
                    </div>    
                    <div class="col-xs-12 col-md-6 col-lg-4">
                            <input type="text" name="fname" required style="border-bottom: 2px solid #8181e2;" class="form-control no-border" placeholder="First Name">
                            <br>
                    </div>
                    
                    <div class="col-xs-12 col-md-6 col-lg-4">
                            <input type="text" name="mname"  style="border-bottom: 2px solid #8181e2;" class="form-control no-border" placeholder="Middle Name">
                        <br>
                    </div>  
                    
                    <div class="col-xs-12 col-md-6 col-lg-4">
                            <input type="text" name="lname" required style="border-bottom: 2px solid #8181e2;" class="form-control no-border" placeholder="Last Name">
                            <br>
                     </div>  
                    <div class="form-group col-xs-12">
                            <br>                        
                        <h4><label for="gen"></label>Select Gender:</label></h4>
                            <div class="col-xs-6 col-md-4 col-lg-3">
                            <select class="form-control" required name="gen">
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                            <option value="o">Others</option>
                            </select>
                        </div>
                        <div class="col-xs-9"></div>
                        </div>
                        <div class="form-group row col-xs-12"> 
                        <div class="form-group col-xs-12 col-md-6 col-lg-6">

                            <h4>
                               Email address:
                            </h4>
                             
                        <input type="email" required style="border-bottom: 2px solid #8181e2;" class="form-control no-border" name="email" placeholder="Email">
                        </div>
                        </div>
                        <div class="form-group row col-xs-12">
                            
                            <div class="col-xs-12 col-md-6 col-lg-6">
                                    <h4>
                                            Year of Passing
                                         </h4>
                            <input type="number" name="yop" required style="border-bottom: 2px solid #8181e2;" class="form-control no-border" min="1945" max="2018" name="yopass" placeholder="Year of passing">
                            <!--hard coding through php-->
                        </div>
                        <div class="col-xs-8">
                            </div> 
                        </div>
                    <div class="form-group row col-xs-12">    
                        <div class="form-group col-xs-12 col-md-6 col-lg-6">
                            <h4>
                                Branch:
                            </h4>
                            <input type="text" name="branch" required style="border-bottom: 2px solid #8181e2;" class="form-control no-border" placeholder="Branch">
                        </div>
                        <div class="col-xs-6">
                        </div> 
                    </div>    
                    <div class="form-group row col-xs-12">
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <h4>
                                Password:
                            </h4>
                                <input type="password"required  name="pass" style="border-bottom: 2px solid #8181e2;" class="form-control no-border" placeholder="Password">
                                <br>
                        </div>
                        
                        <div class="col-xs-12 col-md-6 col-lg-6">
                                <h4>
                                       Confirm Password:
                                    </h4>
                                        <input type="password" required name="cmpass" style="border-bottom: 2px solid #8181e2;" class="form-control no-border" placeholder="Re-type Password"> 
                                        <br>          
                        </div>
                    </div>
                
                    <div class="form-group row col-xs-12">
                        <hr>
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        <button type="reset" onclick="document.getElementById('myForm').reset();" class="btn btn-warning">Reset</button>
                                                 
                    </div>
                </form>
            </div>   
            <div class="col-xs-1">
             </div>
        </div>
        
        <br>
    </body>
<
<?php
}
else{
    header('LOCATION: index.php?register=error');
    exit();
}
?>
<?php
include 'footer.html';
?>