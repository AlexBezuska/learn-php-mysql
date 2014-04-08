<?php

$username = "root";
$password = "U5854N627cJOhuyeQ2sxGaHxf";
$hostname = "localhost";


$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");

$selected = mysql_select_db("test",$dbhandle)
or die("Could not select test db");


$result = mysql_query("SELECT id, make, model, year FROM cars");
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

$carGrid = "";
 while ($row = mysql_fetch_array($result)) {
  $carGrid .=
             "<tr>"
            ."<td>". $row{'id'}    ."</td>"
            ."<td>". $row{'year'}  ."</td>"
            ."<td>". $row{'make'}  ."</td>"
            ."<td>". $row{'model'} ."</td>"
            ."</tr>";
    }



mysql_close($dbhandle);

?>