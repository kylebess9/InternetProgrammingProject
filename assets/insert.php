
<?php
	include("include/connectDB.php");
	/* variables from connectDB.php
		$dbConn - connection object
	*/
	
	// runs code in the if block when the superglobal $_POST[] holds the contents of the form sent in: in this case frmAddStudent 
	if(isset($_POST['frmAddStudent']))
	{
		// though the $dbObj is not used following this statement, it is important in that it sets the active MySQL database. In this case 'carlas_class' is the database being accessed and $dbConn is the MySQL connection being used. If $dbConn is not added then the last connection type witll be used.
		$dbObj = new mysqli('localhost', 'kyleb', 'kkbess9', 'gregsgames');

		// Sets the variable, $sqlStatement, equal to the MySQL query that is built on the right side of the '=' sign. In this case we are inserting a record/row into the table, students, with the fields/columns expressed in the first set of parenthesis, i.e. last_Name, first_Name, contact_Email ... These are field names in this table - each record/row in the table has these fields associated with it. The MySQL statement 'VALUES' tells the MySQL that the following values will be inserted into their respective field for this particular record/row being added - i.e. value stored in $_POST[lastName] will be stored in the field 'last_name' in the table.
		$sqlStatement="INSERT INTO contact (lastName, firstName, username, emailAddress) VALUES ('$_POST[lastName]','$_POST[firstName]','$_POST[username]' ,'$_POST[contactEmail]')";

		// So far we have just built the MySQL statement. We need to execute it. This is done inside the following 'if'. This 'if' statment does 2 things. Working from inner to outer, first the 'mysql_query()' function is processed. This means that the MySQL statement that was built earlier and stored in '$sqlStatement' is sent to the current open MySQL connection which is held in the '$dbConn' object. After this is exectued, the if checks to see if everything worked. If the query fails it will return 'FALSE' and which, because of the NOT operator, 'TRUE' and the 'die()' function is executed. Otherwise, 'TRUE' is returned, all is good, and we move on... 
		if (!mysqli_query($dbObj,$sqlStatement))
		{
			die('Error: ' . mysqli_error($dbObj));
		}
		echo "<h2><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECORD ADDED</h2>";

		// Always good practice to close open databases when finished using them
		include("include/closeDB.php");
	}

?>