<html>

<head>
    <title> Cakes </title>
    <link href="aos.css" rel="stylesheet">
    <link href="all.min.css">
</head>
<script>
    function cake()
    {
        document.getElementById("load").style.display="block";
    }
</script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: cursive;
        box-sizing: border-box;
        scroll-behavior: smooth;
        text-decoration: none;

    }

    body {
        background:linear-gradient(to bottom,#232323,#003442,#232323);
        
    }
    h1{
        text-align:center;
    }
    .cake-text{
        text-align:center;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:55px;
        padding:20px;
        color:#6b97c0;
        text-shadow:0em 0.04em 0.01em rgb(138,10,10);
        
    }
    .text1{
        margin:5px 20px;
    }
    .main{
        width:100%;
        padding:100px;
        height:auto;
        display: flex;
        justify-content:space-around;
        flex-wrap:wrap;
        align-items: center;
      
        
    
    }
    .card{
        width:270px;
        height:340px;
        overflow: hidden;
        background-color:#6b97c0;
        border-radius:38px;
        margin:16px 23px;
        box-shadow:0 0 20px 0 #000000;
     
        
        
    }
    .imagebox{
        width:100%;
        height:234px;
        background-color:rgb(138,10,10);
        overflow:hidden !important;
       
    }
    .image{
        width:100%;
        height:100%;
    
       

    }
    .content{
     
        background-color: #6b97c0;
        font-weight:bold;
        padding:0px;
        width:100%;

    }
    .content h2{
        font-size:23px;
        width:100%;
        font-weight: bold;
        color:rgb(138,10,10) !important;
        text-shadow:0.05em 0.05em 2em #232323;
       padding-top:25px;
       padding-left:8%;
    }
    a{
        color:rgb(138,10,10);
        font-weight:bold;
    }
    .content h4{
  
        transform:translate(0%,150%);
        font-size:19px;
         padding:12px;
         text-align: left;
         margin-left:8%; 
         font-family:cursive;
         text-shadow:0.05em 0.05em 2em rgb(138,10,10); 
         opacity:80%;
        
        
    }
    .card:hover h4{
        transform:translate(0%,0%);
        transition:0.8s ease-in-out;
       
    }
    .card:hover .imagebox
    {
        border-radius:0% 0% 0% 80%;
        transition:0.8s ease-in-out;
    }
    .card:hover .image{
         margin:-10px 22px;
         transition:0.8s ease-in-out;
    }
    .card:hover h2{
        padding-top:10px;
       transition:0.8s ease-in-out;
    }
    
    .footer {
		width:100%;
		height: auto;
		background-color:#6b97c0;
		padding: 20px;
		overflow-y: hidden;
		box-sizing: border-box;
        bottom:0% ;
      
	}

	.fimage {
		width: 50px;
		height: 100%;
		border-radius: 50%;
		padding: 22px 0;
		/* border: 2px solid brown;
		margin-top: 32px;
		margin-right:45%;
		margin-bottom: 19px; */
	}

	.firstcard {
		color: rgb(138, 10, 10);
		bottom: 0;


	}

	.b-text {

		padding: 26px 20px;
	     font-size:32px;
         text-shadow:0em 0.0522em 0em #003442;  

	}

	.secondcard {

		padding: 10px 40%;

	}

	.atag {
		color: #232323;
		justify-content: center;
		align-items: center;
		display: flex;

	}
	
	   .fab {
		margin-left: 18px;
		margin-right: 3px;
		border:1px solid #6b97c0;
		font-size:10px;
		 padding:3px 3px;
		 border-radius: 50%;

	}

	.copyright,
	.logo-text {
		justify-content: center;
		align-items: center;
		display: flex;
	}

	.insta {
		color: black;
	}

	.icon {
		display: none;
		transform: rotate(90deg);
	}

	.f-logos {
		width:6%;
		display: flex;
		justify-content:space-between;
		align-items: center;
	}

   @media screen and (max-width:850px)
   {
    .main {
        width: 100%;
        height:auto;
     flex-wrap: wrap;
     margin-top: 5px;
    padding:0px;
    }
    .card{
        width:270px;
        height:340px;
        overflow: hidden;
        border:2px solid black;
        background-color:#6b97c0;
        border-radius:30px;
        margin:18px 10px;
        
    }
    .imagebox{
        width:100%;
        height:234px;
        background-color:rgb(138,10,10);
       
    }
    .content{
     
        background-color: #6b97c0;
        font-weight:bold;
        padding:0px;
        width:100%;

    }
   
    .footer {
		width:100%;
		height: auto;
		background-color:#6b97c0;
		padding: 20px;
		overflow-y: hidden;
		box-sizing: border-box;
        margin-top:15%;
        bottom:0%;
	}

	.fimage {
		width: 50px;
		height: 100%;
		border-radius: 50%;
		padding: 22px 0;
		/* border: 2px solid brown;
		margin-top: 32px;
		margin-right:45%;
		margin-bottom: 19px; */
	}

	.firstcard {
		color: rgb(138, 10, 10);
		bottom: 0;


	}

	.b-text {

		padding: 26px 20px;
	     font-size:32px;
         text-shadow:0em 0.0522em 0em #003442;  

	}

	.secondcard {

		padding: 10px 40%;

	}

	.atag {
		color: #232323;
		justify-content: center;
		align-items: center;
		display: flex;

	}
	
	   .fab {
		margin-left: 18px;
		margin-right: 3px;
		border:1px solid #6b97c0;
		font-size:10px;
		 padding:3px 3px;
		 border-radius: 50%;

	}

	.copyright,
	.logo-text {
		justify-content: center;
		align-items: center;
		display: flex;
	}

	.insta {
		color: black;
	}

	.icon {
		display: none;
		transform: rotate(90deg);
	}

    .f-logos{
			   padding-bottom:30px;
               width:25%;
		       display: flex;
		       justify-content:space-between;
		       align-items: center;
		   }
   }
   @media screen and (max-width:400px)
   {
       .card{
           margin:10%;
           
       }
       .footer {
			width: 100%;
			height: auto;
			background-color:#6b97c0;
			padding: 0px;
           



		}

		.secondcard {

			padding: 10px 30%;

		}
         
		.atag {
			color: #232323;

       
   }
</style>

<body>
    <script src="all.js"></script>
    <script src="aos.js"></script>
	<script>
		AOS.init();
		AOS.init({
			duration:1800,
		});
	</script>
            <div class="cake-text" data-aos="fade-down">
                <h5 class="text1" align="center " data-aos="fade-down"> Delicious cakes for you! </h5>
                
         </div>
           
     
  
            <?php
                          
            $dbhost="localhost";
            $dbname="root";
             $dbpass="";
             $dbdata="bakery";
               $conn=mysqli_connect($dbhost,$dbname,$dbpass,$dbdata);

               $sql = "select * from cake";
               $result = mysqli_query($conn,$sql);
               
    ?>   
        
        <div class="main" data-aos="fade-down">
    <?php
   
               while($row=mysqli_fetch_assoc($result))
               {
    
                echo '<div class="card">
                <div class="imagebox">
                    <img src="'.$row['cimage'].'" class="image">
                </div>
                <div class="content">
                    <h2> <a href="order.php?q='.$row['cid'].'">'. $row['cname'] .'</a></h2>
                    <h4>'. $row['cprice'].'/-'.'</h4>
                </div></div>';
             }
    ?>
         </div>

         <footer class="footer">
            <div class="firstcard" data-aos="fade-down">
                <div class="logo-text">
                    <img src="logo.jfif" class="fimage"> </img>
    
                    <h2 class="b-text"> Kittu Bakers </h2>
                </div>
    
    
    
    
                <h5 class="copyright">Copyright @ 2022 Kittubakers</h5><br>
                <h5><a href="#" class="atag"> Privacy Policy Terms of use</a></h5>
                <br>
                <center><div class="f-logos">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="https://instagram.com/kartik_dhumal.__?utm_medium=copy_link" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
    
                </div>
                </center>
            </div>
    
        </footer>
</body>

</html>