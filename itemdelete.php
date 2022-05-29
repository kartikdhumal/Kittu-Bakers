<?php
error_reporting(0);
$dbhost="localhost";
$dbname="root";
$dbpass="";
$dbdata="bakery";
$conn=mysqli_connect($dbhost,$dbname,$dbpass,$dbdata);

$fltid = $_GET['q'];
$sqla = "delete from cake where cid='".$fltid."'";
$resulta = mysqli_query($conn,$sqla); 
if($resulta)
{
  ?>
  
  <script>
   alert("Deleted Successfull"); window.location="insert_cake_data.php";</script>
<?php
}    
else{
  ?>
  <script> alert("Deleted Unsucessfull"); window.location="insert_cake_data.php";</script>
<?php
}         

?>