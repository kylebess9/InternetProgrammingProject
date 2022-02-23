
<?php
	include("../include/connectDB.php");

	/* variables from connectDB.php
		$dbConn - connection object to lastknow
	*/

	// Though the $dbObj is not used following this statement, it is important in that it sets the active MySQL database. In this case 'carlas_class' is the database being accessed and $dbConn is the MySQL connection being used. If $dbConn is not added then the last connection type witll be used.
	// get DB from lastknow connection
	$sqlDB = new mysqli('localhost', 'kyleb', 'kkbess9', 'gregsgames');
	// The following line builds a MySQL statement and stores it in the variable '$sqlStatement'. The statement being built is a 'SELECT' statement and the asterisks following 'SELECT' tell MySQL to select all 'FROM' the table 'students'. Even though we are selecting all there are still some restrictions/filters that need to be set given that we only want all the data associated with a particular student. To do this a 'WHERE' clause is included. This 'WHERE' clause amends the SELECT all from earlier so that this statement will select all information (field/column data) from the table where the record's 'last_name' = the value stored in '$_POST[get_lastName]' 'AND' the 'first_Name' = the value stored in '$_POST[get_firstName]'
	$sqlStatement = "SELECT * FROM contact WHERE (lastName = '$_POST[get_lastName]') AND (firstName = '$_POST[get_firstName]')";
	
	//Once the MySQL statement has been built it needs to be processed. This is done with the 'mysql_query()'. The result of this query is stored in the '$result' variable.
	$result = mysqli_query($dbConn, $sqlStatement);
	
	//To make the data that was received in the previous query call more accessible the 'mysql_fetch_array()' is used. This MySQL query call returns a row from a recordset as an associative array and/or a numeric array. As an associative array the indices used in the array would be the record's field names whereas, with a numeric array the first field in a record is given the first index value, 0, and the second, 1, and so on. Thus, each field's value can be accessed with a numeric index value or with a field name index value. 
	$studentRecord = mysqli_fetch_array($result);

	//checks to see that the MySQL queries processed/executed were done correctly and each returned true (meaning it worked - this just means that the queries returned something. Whether or not it is the data you require depends on how the queries were built).
	if (!$studentRecord)
	{
		die('Error: ' . mysqli_error($sqlDB));
	}
	$firstName = $studentRecord['firstName'];
	$lastName = $studentRecord['lastName'];
	$stuEmail = $studentRecord['emailAddress'];
	$username = $studentRecord['username'];
	// <> <> SEND EMAIL TO STUDENT <> <>
	//building the email to send.
	$to = $studentRecord['emailAddress'];
	$from = 'greg@greggambits.com';
	$subject = "Hello From Greg";
	$message = "Thanks for playing my games!";
	$headers = "From:" . $from;
	
	//php mail function - fairly self explanatory
	mail($to,$subject,$message,$headers);
	echo "Mail Sent.";
	echo "<p>Student: " . $firstName . " " . $lastName . "</p>";
	echo "<p>Email: " . $stuEmail . "</p>";
	echo "<p>Username: = " . $username . "</p>";

	include("../include/closeDB.php");
?>