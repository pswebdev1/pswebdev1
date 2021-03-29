<?
	/*$servername = "localhost";
	$username = "jamal1234";
	$password = "cudgunofcu60";
	$mydb = my_jamal1234;
	*/
	
	$con = mysqli_connect("localhost", "jamal1234", "cudgunofcu60", "my_jamal1234");
	if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>