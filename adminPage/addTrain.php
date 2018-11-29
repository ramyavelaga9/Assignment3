<?php

$data    = $_POST["result"];
$data    = json_decode("$data", true);

$name=$data["tName"];

$con= mysqli_connect('localhost','enduser','16011a0516');


if(!$con)
{

echo "Not connected to server";

}

if(!mysqli_select_db($con,'TrainNames'))
{
echo "Database not connected";
}

$sql="INSERT INTO name (tName) VALUES ('$name')";

if(!mysqli_query($con,$sql))
{
echo "There is some error adding the train";
}
else 
{
echo "train Added Sucesfully";

}


?>