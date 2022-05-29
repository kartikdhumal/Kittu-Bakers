 <html> 
     <head>
      <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family:cursive;
        }
        body{
            background:linear-gradient(to bottom,#232323,#003442,#232323);

        }
        .container{
            height:75%;
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
         
            
        }
        .form{
            /* width:25%; */
        }
        .maintable{
            width:300px;
        }
      
        input[type="text"] {
       width:100%;
        float: left;
        padding:7px 0;
        border:none;
        border-radius:10px;
        background:none;
        border:none;
        border-bottom:3px solid #6b97c0;
        outline:none;  
        color:white;
        padding-left:10px;
        font-size:18px;
    } 
    input[type="file"]
    {
        outline:none; 
        color:black;
    }
        .maintable tr,td{
        
            padding:14px 7px;
            border-radius:5%;   
        }
        table{
            border-radius:5%;
         
            background-color:#171717;
        }
         form{
            border-radius:5%;
         }
        label{
            font-size:18px;
             text-align:left;
             color:#6b97c0;
       
     
            
        }
        .title{
            text-align:center;
            font-size:25px;
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:15px;
            color:#6b97c0;
            text-shadow: 0em 0.05em 0em rgb(138, 10, 10);

        }
       
        
	#insert {
		padding:5px 25px;
		background-color:rgb(138, 10, 10);
		color:#6b97c0;
		font-size:13px;
        width:100%;
        border:none;
	
	}
    #contenttable{
        background:linear-gradient(to bottom,#232323,#003442,#232323);
        width:100%;
        font-size:20px;
        text-align:center;
        color:#6b97c0;
    }

  	#insert:hover {
		background-color:#6b97c0;
		color:rgb(138, 10, 10);
		font-weight: bold;
        box-shadow: 0 0 10px #000000;


	}
 
    @media screen and (max-width:440px)
    {
        table{
            width:auto;
        }
        #contenttable{
         font-size:17px;
        }
        .main{
            overflow:scroll;
            border:1px solid ;
        }

    }
          </style>
    </head>
    <script>
           function insert()
           { 
                var cimage = document.getElementById("cimage").value;
                var cname =  document.getElementById("cname").value;
                var cprice = document.getElementById("cprice").value;
                var n=/^[A-z]+$/;
			    var s=/^[0-9]+$/;

            if(cimage == "" )
        {
            alert("Please select the image ");
            return false;

        }
        else if(cname == "")
        {
            alert("Please Enter the name of the cake");
            return false;
        }
        else if(cprice == "")
        {
            alert("Please Enter the price ");
            return false;
        }
        else if(n.test(cname)==false)
        {
            alert('Please Enter Alphabets in name');
		    return false;
        }
        else if(s.test(cprice)==false)
        {
            alert('Invalid Data');
				return false;
        }
        else{
            alert('The data has sucessfully Inserted!!');
        }
        
 }
   
function deleteitem()
{
    let text = confirm("Are you sure want to delete ? ");
    if(text)
    {
        text = "";
    }
    else{
        document.getElementById('deleteitem').href="#";
    }
}
</script>
<body>

       <div class="title" onclick="emraan()"> <h2> Insert Items </h2> </div>
      <div class="container">
             <form method="post" enctype="multipart/form-data" class="form">
            <table cellpadding="0px" cellspacing="0px" class="maintable">
                  <tr> <td ><label> Insert Cake Image </label> </td> </tr>
                  <tr> <td> <input type="file" id="cimage"  autocomplete="off" name="cimage" required> </td> </tr>
                  <tr> <td> <label> Name Of The Cake </label> </td> </tr>
                  <tr> <td> <input type="text" id="cname" name="cname" required> </td> </tr>
                  <tr> <td><label> Price </label> </td> </tr>
                  <tr> <td> <input type="text" id="cprice" name="cprice" required> </td></tr>
                  <tr> <td> <center> <input type="submit" id="insert" onclick="insert()" name="insert" value="INSERT" > </center> </td></tr>
           </table>
           </form>
</div>
<?php
          
            
    $dbhost="localhost";
    $dbname="root";
    $dbpass="";
    $dbdata="bakery";
    $conn=mysqli_connect($dbhost,$dbname,$dbpass,$dbdata);


    if(isset($_REQUEST['insert']))
    {	
		     $cimage = $_FILES["cimage"]["name"];   
		$cimage_type = $_FILES["cimage"]["type"];
		$cimage_size = $_FILES["cimage"]["size"];
		$cimage_temp = $_FILES["cimage"]["tmp_name"];
		$cimage_error = $_FILES["cimage"]["error"];
		
	    $upload = move_uploaded_file($_FILES["cimage"]["tmp_name"] , $_FILES["cimage"]["name"]);

    $cname = $_REQUEST['cname'];
    $cprice = $_REQUEST['cprice'];
   
    if($cname=="")
    {
        ?>
          <script> alert(" Please Enter the name of the cake " ); return; </script>
        <?php
    }
    else if($cprice =="")
    {
        ?> 
          <script> alert("Please Enter the price " ); return; </script>
        <?php
    }
    else
    {
        $sql = "insert into `cake` (cimage,cname,cprice) values ('$cimage','$cname',$cprice)";
        $result = mysqli_query($conn,$sql);
        ?>
        <script> alert("Inserted Data Sucessfully !! " ); return; </script>
       <?php
    }
   

    $cimage="";
    $cname="";
    $cprice="";
}
?>
<div class="main">
<table id="contenttable">
           <tr style="background-color:rgb(138,10,10);"> <th> id  </th><th> Item Image </th> <th> Item Name </th><th> Item price </th><th> Delete Item </tr>     
            <?php
            $sql = "SELECT * FROM `cake` ORDER BY cid DESC";
            $results = mysqli_query($conn,$sql);
            $i=1;
                while($row=mysqli_fetch_assoc($results))
               {
                  echo '<tr> <td>'.$i.'</td><td>'.'<img src="'.$row['cimage'].'" style="width:100px; height:100px;"></img>'.'</td><td>'.$row['cname'].'</td><td>'.$row['cprice'].'/-'.'</td><td> <a href="itemdelete.php?q='.$row['cid'].'" style="color:#6b97c0; text-decoration:none;" id="deleteitem" onclick="deleteitem();"> Delete Item </a>'.'</td></tr>';
                $i++;
               }
               
            ?>
</table> 
            </div>
</body>
</html>

