<?php
//set connection variables 
error_reporting(0);
$db_host = 'localhost';
$db_user = 'root';
$db_password = "";
$db_db = 'combin';


//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

//save 
if(isset($_POST['save'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from combin_t WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combin_t (save_value) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['run'])) { //run
    echo "<br>";

    $my_query = "";

    $my_query = "select * from combin_t WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combin_t (run_value) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}


$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];

if(isset($_POST['go'])){

    $my_query = "";

    $my_query = "select * from combin_t WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combin_t (m1, m2, m3, m4, m5, m6) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}

	 $Forward=$_POST['Forward'];
		
    if(isset($_POST['Forward'])){	
	
    echo "<br>";

    $my_query = "";

    $my_query = "SELECT * FROM `combin_2` WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combin_2 (Forward) VALUES (' $Forward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Forward  ";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }}
 
	$ymen=$_POST['ymen'];
		
    if(isset($_POST['ymen'])){	
	
    echo "<br>";

    $my_query = "";

    $my_query = "SELECT * FROM `combin_2` WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combin_2 (ymen) VALUES (' $Right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Right  ";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }}
		
    $Stop=$_POST['Stop'];
		
    if(isset($_POST['Stop'])){	
	
    echo "<br>";

    $my_query = "";

    $my_query = "SELECT * FROM `combin_2` WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combin_2 (Stop) VALUES (' $Stop')";
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

    $my_query = "SELECT * FROM `combin_2` WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combin_2 (Backward) VALUES (' $Backward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Backward  ";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }}

    $ysar=$_POST['ysar'];

    if(isset($_POST['ysar'])){
		

    echo "<br>";

    $my_query = "";

    $my_query = "SELECT * FROM `combin_2` WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combin_2 (ysar) VALUES (' $Ysar')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Left ";
    }
    else{
        echo "ERROR: Unable to past <br>";
		
    }}
	
	
?>
