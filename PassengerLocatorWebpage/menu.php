<!DOCTYPE html>
<head>
    <title>menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="tracker.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" language="javascript" src="style/style.js"></script> -->

    <script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","getuser.php?q="+str,true);
            xmlhttp.send();
        }
    }
</script>
    
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Passenger Locator</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="menu.php">Home</a></li>
      <li><a href="passenger.php">Passenger</a></li>
      <li><a href="luggage.php">Luggage</a></li>
      <li><a href="ticket.php">Ticket</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div id="rounded">
  <div class="jumbotron text-center">
            <h1>Flights</h1>
          </div>
        

        <div class="clear"></div>

        <div id="pageContent" class="container">
                 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Flight ID</th>
        <th>Airline</th>
        <th>Flight Date</th>
        <th>Destination</th>
        <th>Deputure Time</th>
        <th>Arrival Time</th>
      </tr>
    </thead>
  </table>
  </div>
          
    


    <div class="clear"></div>
    

</div>




</body>

</html>
