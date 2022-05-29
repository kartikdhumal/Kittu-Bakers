<?php
error_reporting(0);
       $dbhost="localhost";
       $dbname="root";
       $dbpass="";
       $dbdata="bakery";
       $conn=mysqli_connect($dbhost,$dbname,$dbpass,$dbdata);

       $sql = "SELECT * FROM `delievery` ORDER BY ordered_on DESC";
       $result = mysqli_query($conn,$sql);
        
 
     
  

?>
<html>
<head>
    <style>
         * {
        margin: 0;
        padding: 0;
        font-family: cursive;
        box-sizing: border-box;
        text-decoration: none;
        scroll-behavior: smooth;

    }
    body{
        background:linear-gradient(to bottom,#003442,#232323);
        height:100%;
    }
    h1{
        text-align:center;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:36px;
        padding:20px;
        color:#6b97c0;
        text-shadow:0em 0.20em 0em #232323;
    }
    table{
         border:1px solid rgb(138,10,10);
         width:100%;
         font-size:19px;
         margin-top:3%;
         color:white;
    }
    tr,td{
        border:1px solid rgb(138,10,10);
        padding:5px 10px;
    }
    th{
        padding:8px 10px;
        text-transform:uppercase;
        background-color:rgb(138,10,10);
        color:#6b97c0;
    }
    .deletebox
    {
        width:100%;
        bottom:0;
        text-align:right;
      
    }
    .delete
    {
        color:#6b97c0;
        text-decoration:underline;
        text-align:right;
        margin:10px 25px;
    }

    @media screen and (max-width:850px)
    {
        
        .main h1 
        {
            position:fixed;
            width:100%;
        }
        table{
            width:100%;
            font-size:17px;
            word-wrap:break-word;
      
 
        }
        .main{
            overflow:scroll;
        }
        #contenttable{
            margin-top:38%;
        }
        .delete{

            position:fixed;
            font-size:14px;
            margin-top:23%;
        }
        tr,td{
        border:1px solid rgb(138,10,10);
        padding:0px;


    }

    th{
        padding:0px;
        border:2px solid #6b97c0;;
        text-transform:uppercase;
        background-color:rgb(138,10,10);
        color:#6b97c0;

    }
    }
    @media screen and (max-width:400px)
    {
       
    }
        </style>
     </head>

<body>
    <script>
     function deletelist()
     {
         alert("Are you sure want to delete ? ");
     }
   </script>
     <div class="main">
         <h1> Order List </h1> <a href="orderdelete.php" class="delete" name="delete" onClick="deletelist();"> Delete Entire List ? </a>
       
                      <table cellpadding="0" cellspacing="0" id="contenttable">
           <tr> <th> NO.  </th><th> Date </th> <th> Name </th><th> Address  </th> <th> item name </th> <th> item_price </th> <th> Delievery Charges </th><th> Total Price </th><th> Phone no. </th><th> Ordered on </th>
    </tr>     
            <?php
            $i=1;
                while($row=mysqli_fetch_assoc($result))
               {
                   $abc = $row['price'];
                   $def = '/-';
                   $abcdef = $abc + $def;
                  echo '<tr> <td>'.$i.'</td><td>'.$row['date'].'</td><td>'.$row['name'].'</td><td>'.$row['address'].'</td><td>'.$row['item_name'].'</td><td>'. $row['item_price'].''.$def.'</td><td>'.$row['delievery_charges'].'</td><td>'.$row['total_price'].'</td><td>'.$row['phoneno'].'</td><td>'.$row['ordered_on'].'</td></tr>';
                  $i++;
               }
               
            ?>
</table>
            </div>
  
</body>
</html>

