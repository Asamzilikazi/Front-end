<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','airportuser');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Flight ID</th>
<th>Airline</th>
<th>Flight Date</th>
<th>Destination</th>
<th>Deputure Time</th>
<th>Arrival Time</th>
<th></th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['flightId'] . "</td>";
    echo "<td>" . $row['airline'] . "</td>";
    echo "<td>" . $row['flightDateAge'] . "</td>";
    echo "<td>" . $row['destination'] . "</td>";
    echo "<td>" . $row['deputureTime'] . "</td>";
    echo "<td>" . $row['arrivalTime'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>