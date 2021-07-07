<?php
  //set connection variables 
  error_reporting(0);
 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $d_db = 'datab1';
 

  //connection to server & database 
  $connection = mysqli_connect($hostname,$username,$password, $d_db );

  //check connection 
    if(!$connection){
	  die("connected faild : " .mysqli_connect_error()); 
  }
  	  echo"The robot control base has been successfully connected :) " ;
	  
	   

    $Forward=$_POST['Forward'];
		
    if(isset($_POST['Forward'])){	
	
    echo "<br>";

    $my_query = "";

    $my_query = "SELECT * FROM `con_ro1` WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO con_ro1 (Forward) VALUES (' $Forward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Forward  ";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }}
 

	
    $Stop=$_POST['Stop'];
		
    if(isset($_POST['Stop'])){	
	
    echo "<br>";

    $my_query = "";

    $my_query = "SELECT * FROM `con_ro1` WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO con_ro1 (Stop) VALUES (' $Stop')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Stop  ";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }}

    $Backward=$_POST['Backward'];
		
    if(isset($_POST['Backward'])){	
	
    echo "<br>";

    $my_query = "";

    $my_query = "SELECT * FROM `con_ro1` WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO con_ro1 (Backward) VALUES (' $Backward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Backward  ";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }}

    if(isset($_POST['ysar'])){	
	
    echo "<br>";

    $my_query = "";

    $my_query = "SELECT * FROM `con_ro1` WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO con_ro1 (ysar) VALUES (' $Left')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Left  ";
    }
    else{
        echo "ERROR: Unable to past <br>";
		
    }}
	$ymen=$_POST['ymen'];
		
    if(isset($_POST['ymen'])){	
	
    echo "<br>";

    $my_query = "";

    $my_query = "SELECT * FROM `con_ro1` WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO con_ro1 (ymen) VALUES (' $Right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Right  ";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }}
	
?>
