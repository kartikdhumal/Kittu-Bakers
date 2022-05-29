

<html>
    <head>
        <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<style> 
  </style>
        </head>
        <body>
        <?php
session_start();
  $dbhost="localhost";
  $dbname="root";
  $dbpass="";
  $dbdata="bakery";
  $conn=mysqli_connect($dbhost,$dbname,$dbpass,$dbdata);  
  include 'index.html';
  require 'index.html';
  date_default_timezone_set('Asia/Calcutta');
  $date = date("Y-m-d");
  $time = date("h:i:sa");

  if(isset($_POST['submit']))
  {
      $firstname = $_REQUEST['firstname'];
      $lastname = $_REQUEST['lastname'];
      $email = $_REQUEST['email'];
      $password = $_REQUEST['password'];

      $query = "insert into registration (date,registrated_on,firstname,lastname,email,password) values ('$date','$time','$firstname','$lastname','$email','$password')";
      $result = mysqli_query($conn,$query);
      if($result)
      {
          ?>
 <script>
       Swal.fire({
                        icon:'success',
                        position:'top-center',
                        title:'Registration Successfull',
                        showConfirmButton:false,
                        timer:2000
                    })
                    window.location="index.html";
                    document.getElementById('forms').style.marginTop =="-163%";
                    
              </script>
          <?php
      }
      else{
        ?>
        <script>
        window.location="index.html";
        document.getElementById('forms').style.marginTop =="-163%";
        </script>
                 <?php
      }
  }
  
  
if(isset($_POST['login']))
  {
      $myemail = $_REQUEST['myemail'];
      $mypassword = $_REQUEST['mypassword'];
      $select = "select * from registration where email='$myemail'";
      $res = mysqli_query($conn,$select);
      $row = mysqli_fetch_assoc($res);
    
       if($myemail=="kartikdhumal24@gmail.com" && $mypassword=="Yalgaar2022") 
       {
        ?>
        <script> window.location="admin.html"; </script>
       <?php
       }


      if(empty($row))
      {
        ?>
           <script> alert("Username Not found"); </script>
        <?php
      }
      else if($mypassword!=$row['password'])
      {
        ?>
        <script> alert("Wrong Password!"); </script>
       <?php
      }
      else 
      {
        $query2 = "insert into login (date,logged_on,email,password) values ('$date','$time','$myemail','$mypassword')";
        $result2 = mysqli_query($conn,$query2);
        if($result2)
        {
            ?>
 <script> 
          Swal.fire({
                        icon:'success',
                        title:'Login Successfull',
                        showConfirmButton:false,
                        timer:2000
                    })
          window.location="index.html"; 
          document.getElementById('forms').style.marginTop =="-163%"
          </script>
          <?php
        }
        else 
        {
            ?>
 <script> window.location="index.html"; 
  document.getElementById('forms').style.marginTop =="-163%"
</script>
          <?php
        }

      }
 


  }

?>
    </body>
</html> 
