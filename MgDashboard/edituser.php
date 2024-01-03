<?php
include_once 'LogHeader.php';

?>



<?php


if((isset($_GET['userid']))){
    $uid = $_GET['userid'];





    $sql = "Select * from user_details where user_id = $uid " ;
    $result = $conn->query($sql) ;

    if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){
                $profile = array();
                $profile["UserID"] = $row["user_id"];
                $profile["FirstName"] = $row["fname"];
                $profile["LastName"] = $row["lname"];
                $profile["Phone"] = $row["phone_No"];
                $profile["Address"] = $row["address"];
                $profile["City"] = $row["city"];
                $profile["PostalCode"] = $row["postalcode"];
                
            }

    }else {
            echo "empty table";
    }  ?>


<link rel="stylesheet" href="./Style/edituser.css">




<section class="details-section">
                    
                    

                    <div class="my-details">
                        <center><h2 style="margin-top: 12px;">User Details</h2> </center>

                        

                        <div class="detail-container">
                            
                            <p><img src="./images/userprofile/icons/user-solid (1) 1.png" style="margin-right: 10px;"><strong>User ID:<?php echo " ".$profile["UserID"];?></strong></p>
                            <p><img src="./images/userprofile/icons/user-solid (1) 1.png" style="margin-right: 10px;"><strong>Name: <?php echo " ".$profile["FirstName"]." ".$profile["LastName"];?> </strong></p>
                            <p><img src="./images/userprofile/icons/phone-solid 1.png" style="margin-right: 10px;"><strong>Phone:<?php echo " ".$profile["Phone"];?> </strong></p>
                            <p><img src="./images/userprofile/icons/house-solid 1.png" style="margin-right: 10px;"><strong>Address: <?php echo " ".$profile["Address"];?> </strong></p>
                            <p><img src="./images/userprofile/icons/city-solid 1.png" style="margin-right: 10px;"><strong>City:<?php echo " ".$profile["City"];?> </strong></p>
                            <p><img src="./images/userprofile/icons/envelopes-bulk-solid 1.png" style="margin-right: 10px;"><strong>Postal Code: <?php echo " ".$profile["PostalCode"];?> </strong></p>
                          
                          </div>
                    </div>


                       


                    <form action = "./edituserprofile.php" method = "POST">
                <div class= "edit-details">
                   <center> <h2 style="margin-top: 10px;">Edit Details</h2></center> 
                   <div class="edit-container">
                    <input type="hidden" name="userid" value="<?php echo $profile["UserID"] ?>">
                   <p><img src="./images/userprofile/icons/user-solid (1) 1.png" style="margin-right: 10px;"><strong>FirstName:</strong></p><input type = "text" name= "fname" value= "<?php echo $profile["FirstName"] ?>">
    <p><img src="./images/userprofile/icons/user-solid (1) 1.png" style="margin-right: 10px;"><strong>LastName:</strong></p><input type = "text" name= "lname" value= "<?php echo $profile["LastName"] ?>" >
    <p><img src="./images/userprofile/icons/phone-solid 1.png" style="margin-right: 10px;"><strong>Phone:</strong></p><input type="tel" name="phone" value= "<?php echo $profile["Phone"] ?>">
    <p><img src="./images/userprofile/icons/house-solid 1.png" style="margin-right: 10px;"><strong>Address:</strong></p> <textarea id="address" name="address" rows="4" cols="50" style="margin-left: 30px;"> <?php echo $profile["Address"] ?></textarea>
    <p><img src="./images/userprofile/icons/city-solid 1.png" style="margin-right: 10px;"><strong>City:</strong></p><input type = "text" name= "city" value= "<?php echo $profile["City"] ?>" >
    <p><img src="./images/userprofile/icons/envelopes-bulk-solid 1.png" style="margin-right: 10px;">Postal Code:</strong> <input type ="number" id="postalcode" name="postalcode" value= "<?php echo $profile["PostalCode"] ?>" >
    <br><div class = "update"><input type="submit" name = "submit" value="UPDATE" class="submit"></div>
    </div>
        </form>


    </section>
        <?php
if(isset($_GET["message"])){
	if($_GET["message"]=="updateprofile"){
		echo "<script> alert ('Profile Updated') 
        location.href='./edituser.php';
        </script> " ;
	}else {

    }
}  ?>

                </section>


        </main>


     
        

    </body>
</html>

<?php
        include_once 'footer.php';
        ?>

<?php
}else {
    $conn->close() ;
    
    
}  ?>