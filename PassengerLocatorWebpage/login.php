<!DOCTYPE html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="tracker.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" language="javascript" src="style/style.js"></script> -->

    <style>
      body {
          background-image: url("airport-6.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          padding: 100px;
      }
      </style>
    
</head>

<body>


<div id="rounded">
  <div class="jumbotron text-center">
            <h1>Passenger Locator</h1>
          </div>
        

        <div class="clear"></div>

        <div id="pageContent" class="container">
             
          
        </div>


    <div class="clear"></div>
    

</div>
   

      <!--  <center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></center> 
        
        <div id="id01" class="modal"> -->
          
          <form class="modal-content animate" action="menu.php" method="POST" size=50>
            <div class="imgcontainer">
              <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
            
              <img src="img_avatar2.png" alt="Avatar" class="avatar">
              


            </div>
        
            <div class="container">
              <label><b>Email</b></label>
              <input type="text" placeholder="Enter Email Address" name="email" required>
        
              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
                
              <button type="submit">Login</button>
              <input type="checkbox" checked="checked"> Remember me
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        <!-- </div>
        
        <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script> -->

        <?php

        /*include"mysqliDB.php";*/

        IF(ISSET($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cek = mysql_num_rows(mysql_query("SELECT * FROM user_login WHERE email='$email'AND password='$password'"));
            $data =mysql_fetch_row(mysql_query("SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
            IF($cek > 0)
            {
                session_start();
                $_SESSION['email'] = $data['email'];
                $_SESSION['name'] = $data['fullName'];
                 echo "<script language=\"javascript\">alert(\"welcome\");document.location.href='menu.php'</script>";
            }
            else{
                echo "<script language=\"javascript\">alert(\"invali email or password\");document.location.href='login.php';</script>";
            }
            }
        
        
        ?>
</body>
</html>