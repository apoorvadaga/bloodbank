<html>
   <body>
      <?php
         $server = "localhost";
         $username = "root";
         $password = "";
         $dbname = "reciever information";
         
         $con = mysqli_connect($server, $username, $password, $dbname);
         
         if(!$con)
         {
             die("connection to this database failed due to" .
              mysqli_connect_error());
         }
         //echo "Success connecting to the database";
         $HospitalName = array_key_exists('HospitalName', $_POST) ? $_POST['HospitalName'] : 'xyz';
         $EmailID = array_key_exists('EmailID', $_POST) ? $_POST['EmailID'] : 'xyz';
         $Password = array_key_exists('Password', $_POST) ? $_POST['Password'] : 'xyz';
         $MobileNo = array_key_exists('MobileNo', $_POST) ? $_POST['MobileNo'] : 'xyz';
         $Address = array_key_exists('Address', $_POST) ? $_POST['Address'] : 'xyz';
         $BloodGroup = array_key_exists('BloodGroup', $_POST) ? $_POST['BloodGroup'] : 'xyz';
         $State = array_key_exists('State', $_POST) ? $_POST['State'] : 'xyz';


         $sql0 = "SELECT * FROM hospital";
         $rowcount = $con->query($sql0);
         $recieverid = $rowcount->num_rows +1;

      
       $sql = "INSERT INTO hospital (HospitalName,EmailID,Password,MobileNo,Address,BloodGroup, State) VALUES ('$HospitalName','$EmailID','$Password','$MobileNo','$Address','$BloodGroup','$State');";
       echo $sql;
       

         if (mysqli_query($con, $sql)){
            echo "success";
            }else{
            echo "failed";
            }
         
         
         ?>
   </body>
</html>