<?php

define ("LocalName","localhost");
define ("Name","root");
define ("Password","");
define ("Database","aptechdb");


$con = mysqli_connect(LocalName,Name,Password,Database);


if ($con)

{
	echo"Connection Established!!";
}
else
{
	echo"Connection Failed";
}



?>