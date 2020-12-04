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
         $Name = array_key_exists('Name', $_POST) ? $_POST['Name'] : 'xyz';
         $EmailID = array_key_exists('EmailID', $_POST) ? $_POST['EmailID'] : 'xyz';
         $Password = array_key_exists('Password', $_POST) ? $_POST['Password'] : 'xyz';
         $MobileNo = array_key_exists('MobileNo', $_POST) ? $_POST['MobileNo'] : 'xyz';
         $Address = array_key_exists('Address', $_POST) ? $_POST['Address'] : 'xyz';
         $Age = array_key_exists('Age', $_POST) ? $_POST['Age'] : 'xyz';
         $Gender = array_key_exists('Gender', $_POST) ? $_POST['Gender'] : 'xyz';
         $DOB = array_key_exists('DOB', $_POST) ? $_POST['DOB'] : 'xyz';
         $BloodGroup = array_key_exists('BloodGroup', $_POST) ? $_POST['BloodGroup'] : 'xyz';
         $State = array_key_exists('State', $_POST) ? $_POST['State'] : 'xyz';

         $sql0 = "SELECT * FROM reciever";
         $rowcount = $con->query($sql0);
         $recieverid = $rowcount->num_rows +1;

        // $sql = "INSERT INTO `reciever` (Reciever's ID, Name, Email ID, Password, Re - Password, Mobile No, Address, Age, Gender, DOB, Blood Group, State) VALUES (".$recieverid.",".$Name.",".$EmailID.",".$Password.",".$MobileNo.",".$Address.",".$Age.",".$Gender.",".$DOB.",".$BloodGroup.",".$State.")";
        //$sql = "INSERT INTO reciever (Name,EmailID,Password,MobileNo,Address, Age, Gender, DOB, BloodGroup, State) VALUES (".$Name.",".$EmailID.",".$Password.",".$MobileNo.",".$Address.",".$Age.",".$Gender.",".$DOB.",".$BloodGroup.",".$State.");";
         
       // $sql = `INSERT INTO reciever (Name,EmailID,Password,MobileNo,Address, Age, Gender, DOB, BloodGroup, State) VALUES (`.$Name.`,`.$EmailID.`,`.$Password.`,`.$MobileNo.`,`.$Address.`,`.$Age.`,`.$Gender.`,`.$DOB.`,`.$BloodGroup.`,`.$State.`);`;
        
       //$sql = "INSERT INTO reciever (Name,EmailID,Password,MobileNo,Address, Age, Gender, DOB, BloodGroup, State) VALUES ($Name,$EmailID,$Password,$MobileNo,$Address,$Age,$Gender,$DOB,$BloodGroup,$State);";
       
       $sql = "INSERT INTO reciever (Name,EmailID,Password,MobileNo,Address, Age, Gender, DOB, BloodGroup, State) VALUES ('$Name','$EmailID','$Password','$MobileNo','$Address','$Age','$Gender','$DOB','$BloodGroup','$State');";
       echo $sql;
       //$success = $con->query($sql);

       //$success = mysqli_query($con, $sql0);
        


         if (mysqli_query($con, $sql)){
            echo "success";
            }else{
            echo "failed";
            }
         
         

   
         
         ?>
   </body>
</html>