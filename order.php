<html>

<head>
    <title>
        Order Online
    </title>
    <link href="aos.css" rel="stylesheet">
    <link href="all.min.css">
</head>
<script src="sweetalert2.min.js"></script>

<link rel="stylesheet" href="sweetalert2.min.css">


<style>
    * {
        margin: 0;
        padding: 0;
        font-family: cursive;
        box-sizing: border-box;
        text-decoration: none;
        scroll-behavior: smooth;
    }

    body {

        /* background: url(back.jpeg); */
        /* background-color:#003442; */
        background:linear-gradient(to bottom,#232323,#003442,#232323);
        background-repeat: no-repeat;
        background-size: cover;
       
    }

    .main {
        display: flex;
        justify-content: center;
        align-items: center;
          width:100%;
         height:auto;
    }

    .form {
        width:700px;
        height:100%;
        text-align: center;



    }

    head {
        font-size: 33px;
        padding-top: 4px;
        color: rgb(138, 10, 10);
    }

    table {
        padding:24px 0;
        font-size: 17px;
        margin:25px 0;
        box-shadow:0 0 10px 0 #000000;
        width:100%;
        background:linear-gradient(to left,#232323,#003442,#232323);
    }

    td,tr {
        padding: 2px 40px;
        
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
    input[type="date"]
    {
        background:none;
        /* border-bottom:3px solid #6b97c0; */
        outline:none; 
        color:white;
    }
    #number
    {
      width:100%;
      padding:7px 0;
      border-radius:10px;
      border:none;    
      background:none;
        border:none;
        border-bottom:3px solid #6b97c0;
        outline:none;
        color:white;
        padding-left:10px;
        font-size:18px;
       
    }
    label {
        margin-bottom: -4px;
        color:#6b97c0;
        
    }

    .btn2 {
         padding:5px 25%;
        background-color: red;
        color: white;
        box-shadow:0 0 10px 0 #000000;
        border: 1px solid rgb(138, 10, 10);
        border-radius: 60px;
        margin:10px 0;
        font-size:17px;
    }

    .btn2:hover {
        background-color:#6b97c0;
        box-shadow:0 0 10px 0 #000000;
        color: rgb(138, 10, 10);
        font-weight: bold;
    }

    h1 {
        font-size: 33px;
        text-align: center;
        color: #6b97c0;
        margin-bottom:-30px;
        margin-top:2%;
    }

    .cakes {
        margin-top: -250px;
        margin-left:670px;

        height: 250px;


    }
    #date{
        padding:8px 0;
        width:100%;
        text-align: center;
        border-radius:10px;
        border:none;
    }
   #payment{
        width:100%;
        height:auto;
   }
   .firstcard {
		color:rgb(138,10,10);
		bottom: 0;


	}

	.b-text {

		padding: 26px 20px;
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

	.fa {
		margin-left: 18px;
		margin-right: 3px;
		border:1px solid rgb(138,10,10);
		font-size:10px;
		 padding:7px 7px;
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
    .footer {
		width:100%;
		height: auto;
		background-color:#6b97c0;
		padding: 20px;
    margin-top:5%;
		overflow: hidden;
	}
      #itemname
    {
        width:100%;
        padding:4px 0;
        text-transform:uppercase;
        color:white;
        font-size:18px;

    }
    #itemprice , #delievery
    {
      font-size:16px;
      color:white;

        font-size:18px;
    
    }
    #totalprice{
      font-size:18px;
      font-weight:bold;
      color:white;
        font-size:18px;

    }


    @media screen and (max-width:850px) {
        .main {
            display: flex;
            justify-content: center;
           
            padding:0px 30px;
        }

        form {
          
            width:auto;
            height:auto;
            /* background-color:#6b97c0;; */
            box-shadow: 0 3px 10px #232323;
            margin-top:6%;
             display: flex;
            justify-content: center; 
            align-items:center;
             text-align: center;
            padding:0px;
            box-shadow: 0 3px 32px rgb(138, 10, 10);
           
        }

        table {
            padding:24px 0;
            font-size: 17px;
            width:100%;
            height:100%;
           object-fit: contain;
           margin-top:6%;
           border-radius: 10px 10px 10px 10px;
        }
    
        label {
        margin-bottom:-2px;
        width:100%;
        font-size:16px;
    }
       
    .btn2 {
        padding: 5px 50px;
        color: white;
        border: 1px solid rgb(138, 10, 10);
        border-radius: 60px;
        width:280px;
        margin-right:auto;
        margin-left:0%;
    
        
     
        
    }

        .cakes {
        margin-top: -270px;
        margin-left:90%;
        height: 250px;
        position:relative;
        display: none;


    }
    .footer {
			width: 100%;
			height: auto;
			background-color:#6b97c0;
			 margin-top:20%;



		}
        #pricelabel , #delieverylabel , #totalpricelabel{
            font-size:14px;
        }
        td,tr {
        padding: 2px 20px;
        
    }

		.secondcard {

			padding: 10px 30%;

		}
        .f-logos{
			   padding-bottom:30px;
               width:25%;
		       display: flex;
		       justify-content:space-between;
		       align-items: center;
		   }
		.atag {
			color: #232323;

		}

    }
</style>
<?php
   error_reporting(0);
$dbhost="localhost";
$dbname="root";
$dbpass="";
$dbdata="bakery";
$conn=mysqli_connect($dbhost,$dbname,$dbpass,$dbdata);  

if(isset($_POST['submit']))
{
      
       $name = $_POST['name'];
       $phoneno = $_POST['phoneno'];
       $address = $_POST['address'];
       $cardno = $_POST['cardno'];
       $cvvno = $_POST['cvvno'];
       $expdate = $_POST['expdate'];
       $quantity = $_POST['quantity'];
       $price = $_POST['price'];
        date_default_timezone_set('Asia/Calcutta');
        $date=date('Y-m-d');
        $time = date("h:i:sa");
        $itemname = $_POST['itemname'];
      



         $delievery = 40;                  $mult = $price*$quantity;
         $tp = $mult + 40;
         $query = "insert into `delievery`(date,name,address,item_name,item_price,delievery_charges,total_price,phoneno,ordered_on) values ('$date','$name','$address','$itemname', $mult , $delievery , $tp ,$phoneno,'$time')";
         $result = mysqli_query($conn,$query);
      
         

 }

?>
<body onload="loading()">
     <script src="aos.js"></script>
	<script>
		AOS.init();
		AOS.init({
			duration:1800,
		}); 
    </script>
    <script src="all.js"></script>
      <!-- <script>
              Swal.fire({
                title:'Payment Sucessfull',
                text:'Your Cake will be delievered shortly',
                icon:'success',
                confirmButtonText: 'Okay'
            })
          </script> -->
    <script type="text/javascript">
    function loading()
    {
        var name = document.getElementById("name").value;
        var price = document.getElementById('price').value;
        if(name=="" && price=="" )
        {
           Swal.fire({
               title: 'Looks like Your cart is empty!',
               text: '',
               imageUrl: 'sadcake.png',
               imageWidth:240,
               imageHeight:180,
               confirmButtonText:"Add to cart!",
               imageAlt: 'Oops!',
           }).then(function(){
              window.location="cake.php";
           });
           
        }
    }
  function validation()
  {
        var name = document.getElementById("name").value;
        var phone =  document.getElementById("phone").value;
        var address = document.getElementById("address").value;
        var cvv = document.getElementById("cvv").value;
        var cardno = document.getElementById("cardno").value;
        var quantity  = document.getElementById("number").value;
        var price = document.getElementById('price').value;
        var n=/^[A-z]+$/;
        var s=/^[0-9]+$/;

        if(name=="" && price=="" )
        {
           Swal.fire({
               title: 'Looks like Your cart is empty!',
               text: '',
               imageUrl: 'sadcake.png',
               imageWidth:240,
               imageHeight:180,
               imageAlt: 'Oops!',
           })
        }
 else 
    {
       if( name =="")
         {
          alert("Please Enter Your Name");
          return false;
         }

        else if(phone == "")
       {
          alert("Please Enter Your Phone Number");
          return false;
       }
      else if(address == "")
      {
          alert("Please Enter Your Address");
          return false;
      }
      else if(number == "")
      {
           alert("Please Enter Valid Data");
           return;
      }
      else if(quantity>50)
      {
        
           alert("You can select Maximum 50 items");
           return;

      }
      else if(cvv =="")
      {
          alert("Please enter your CVV");
          return false;
      }
      else if(cardno == "")
      {
          alert("Please Enter Your Card Number ");
          return false;
      }
    //   else if(n.test(name)==false)
    //   {
    //       alert('Please Enter Alphabets in name');
    //       return false;
    //   }
      else if(s.test(phone)==false && phone.length>10)
      {
          alert('Invalid Phone Number');
              return false;
      }
      else if(s.test(cvv)==false && cvv.length>3)
      {
          alert('Invalid CVV');
          return false;
      }
      else if(s.test(cardno)==false)
      {
          alert('Invalid Card No ');
          return false;
      }
  
      else
      {
           let timerInterval
        Swal.fire({
                title:'Payment Sucessfull',
                html:'Your item will be delievered shortly',
                  timer:2000,
                  timerProgressBar: true,
                  didOpen:() => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().queryselector('sub')
                    timerInterval = setInterval(() => {
                         b.textContent = Swal.getTimerLeft()
                        
                  },100)
                  },
                  willClose: () => {
                      clearInterval(timerInterval)
                  }
                }).then((result) => {
                   if(result.dismiss === Swal.DismissReason.timer)
                   {
                     console.log('Bye Bye')
                   }
                })

        //         icon:'success',
        //         confirmButtonText: 'Okay'
        //     })


        // Swal.fire({
        //     title: 'Payment Sucessfull',
        //     showClass:{
        //         popup: 'animate__animated animate__fadeInDown'
        //     },
        //     hideclass:{
        //         popup: 'animate__animated animate__fadeOutUp'
        //     }
        // })
        //     window.location="index.html";
            
      }
     
  }
}
  name = "";
  phone = "";
  address ="";
  cvv = "";
  cardno="";
</script>
    <!-- <h1 data-aos="fade-down"> Order Online </h1> -->
    <br>
    <div class="main">
        <div class="form" data-aos="fade-down">
            <table>
                <form method="POST" action="order.php">
                    <tr>
                        <td><label>Item Name </label> </td> 
                        </tr>
                    </tr>
                    <tr>
                        <td colspan="3">
                        <?php
                            if(!isset($_POST['submit']))
                            {
                              $fltid = $_GET['q'];
                              
                              $itemquery = "SELECT * FROM `cake` WHERE cid =$fltid ";
                              $res = mysqli_query($conn,$itemquery); 
                               $row=mysqli_fetch_assoc($res);

                           echo '<input type="text" id="itemname" name="itemname" readonly="" value="'. $row['cname'].'">';
        
                           } 
                           else{
                            $fltid = $_GET['q'];
                              
                            $itemquery = "SELECT * FROM `cake` WHERE cid =$fltid ";
                            $res = mysqli_query($conn,$itemquery); 
                             $row=mysqli_fetch_assoc($res);

                         echo '<input type="text" id="itemname" name="itemname" readonly="" value="'. $row['cname'].'">';
                           }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label> Price </label> </td> <td>  <label> Quantity </label></td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            if(!isset($_POST['submit']))
                            {
                              $fltid = $_GET['q'];
                              $itemquery = "SELECT * FROM `cake` WHERE cid =$fltid ";
                              $res = mysqli_query($conn,$itemquery); 
                               $row=mysqli_fetch_assoc($res);

                            echo '<input type="text" id="price" readonly="" name="price" value="'. $row['cprice'].'">';
                            }
                            else{
                                $fltid = $_GET['q'];
                                  
                                $itemquery = "SELECT * FROM `cake` WHERE cid =$fltid ";
                                $res = mysqli_query($conn,$itemquery); 
                                 $row=mysqli_fetch_assoc($res);
    
                             echo '<input type="text" id="itemname" name="itemname" readonly="" value="'. $row['cname'].'">';
                               }
                            ?>
                        </td>
                        <td colspan="2"> 
                            <input type="number" onChange="abc();" min="1" max="50" maxlength="3" id="number" name="quantity"> </td>
                    </tr>
                    <tr>
                        <td colspan="3"> <label>Name </label></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="text" id="name" pattern="[a-zA-Z\s]+" name="name" required></td>
                    </tr>
                    <tr>
                        <td colspan="3"><label>Phone</label> </td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="text" id="phone" required name="phoneno" minlength="10"  maxlength="10" pattern="[0-9]+"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><label>Address</label></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="text" required id="address" name="address"></td>
                    </tr>
                    <tr>
                    <td colspan="2"><label > Card Number </label></td>
                        <td ><label> CVV </label></td>
                        
                        
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" id="cardno" name="cardno" minlength="8" maxlength="8" required></td>
                        <td><input type="text" id="cvv" name="cvvno" minlength="3" maxlength="3" required></td>
                    </tr>
                    <tr>
                        <td><label> Expiration Date </label></td>
                        <td rowspan="2" colspan="2">
                            <img src="payment.png" id="payment" name="payment">
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <input type="date" id="date" name="expdate" required> 
                           </td>
                    </tr>
                    <tr>
                        <td> <label id="pricelabel"> Item Price  </label> </td>
                        <td>   <label id="delieverylabel"> Delievery Charges   </label></td>
                        <td>    <label id="totalpricelabel"> Total Price </label> </td>
                      </tr>
 
                    <tr>
                        <td>  <h3 name="itemprice" id="itemprice"></h3>  </td>
                        <td> <h3 name="delievery" id="delievery"></h3>   </td>
                       <td> <h3 id="totalprice" name="totalprice"></h3> </td>
                   </tr>  
                      <tr>
                        <td colspan="3"><center><input type="submit" name="submit" class="btn2" onclick="validation();" value="Order"></center>
                        </td>
                    </tr>
                    
                </form>
            </table>



            <img src="bunches.png" class="cakes"></img>
        </div>
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
    <script type="text/javascript"> 
        function abc()
        {
                
                  var price = document.getElementById('price').value;
                  if(document.getElementById('price').value=="")
                  {
                    document.getElementById('itemprice').innerHTML="";
                    document.getElementById('delievery').innerHTMl="";
                    document.getElementById('totalprice').innerHTML="";
                  }
                  else
                  {
                  var number = document.getElementById('number').value;
                  var itemprice = document.getElementById('itemprice').innerHTML= price*number + "/-";
                  var delievery = 40;
                  var charge =  document.getElementById('delievery').innerHTML=delievery + "/-";
                   document.getElementById('totalprice').innerHTML = price*number + delievery + "/-";
                  }
        }
    </script>
</body>

</html>
