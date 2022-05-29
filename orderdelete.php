<?php
error_reporting(0);
$dbhost="localhost";
$dbname="root";
$dbpass="";
$dbdata="bakery";
$conn=mysqli_connect($dbhost,$dbname,$dbpass,$dbdata);

           $sqla = "TRUNCATE delievery";
          $resulta = mysqli_query($conn,$sqla); 
          if($resulta)
          {
            ?>
            
            <script>
             alert("Deleted Successfull"); window.location="customar_info.php";</script>
        <?php
          }    
          else{
            ?>
            <script> alert("Deleted Unsucessfull"); window.location="customar_info.php";</script>
        <?php
          }           
   

          ?>