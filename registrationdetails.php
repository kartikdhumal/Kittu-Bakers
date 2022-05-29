<?php
error_reporting(0);
       $dbhost="localhost";
       $dbname="root";
       $dbpass="";
       $dbdata="bakery";
       $conn=mysqli_connect($dbhost,$dbname,$dbpass,$dbdata);

       $sql = "SELECT * FROM `registration` ORDER BY id desc;";
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
        .main{
            overflow:scroll;
            
        }
        .main h1 
        {
            position:fixed;
            width:100%;
        }
        table{
            width:100%;
            /* font-size:8.4px; */
            font-size:17px;
            word-wrap:break-word;
            margin-top:25%;
        

            
      
 
        }
        body{
            overflow:scroll;
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
        </style>
     </head>

<body>
    <script>
   </script>
   <div class="main">
         <h1> Registration details </h1>
    <table cellpadding="0" cellspacing="0" id="contenttable">
           <tr> <th> id </th><th> Date </th> <th> First name </th><th> Last Name </th> <th> Email </th> <th> Password </th> <th> Registrated On </th> </tr>
            <?php
            $i=1;
                while($row=mysqli_fetch_assoc($result))
               {

                  echo '<tr> <td>'.$i.'</td><td>'.$row['date'].'</td><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td><td>'.$row['email'].'</td><td>'. $row['password'].''.$def.'</td><td>'.$row['registrated_on'].'</td></tr>';
                  $i++;
               }
               
            ?>
</table>
            </div>
  
</body>
</html>

