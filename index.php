<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:viktorponomarov1.database.windows.net,1433; Database = viktorponomarov1", "dbadmin", getenv('DB_PASSWORD'));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "dbadmin", "pwd" => getenv('DB_PASSWORD'), "Database" => "viktorponomarov1", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:viktorponomarov1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
	</table>
<?php
    echo '<h1><center>FINAL TASK</h1></center>';
    echo '<h2><center>Database has connected successfully in region:</h2></center> ' . getenv('REGION');
?>
</body>
</html>
