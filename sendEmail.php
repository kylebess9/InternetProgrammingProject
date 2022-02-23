<?php include ('assets/insert.php'); 
	include('include/header.php');
?>


<div id="container"> 
	<h1 id="logo"><em>Greg's Gamers</em></h1>
	<p>&nbsp; </p><p>&nbsp; </p>

	<div id="content">
		<div style="float: left; width: 400px; border: 1px solid white; padding: 5px; margin-right: 50px; clear:both;">
				<p>Send report by email</p><hr />
				<form action="assets/getStudent.php" method="post">
					<table>
						<tr>
							<td>Last Name: </td>
							<td><input type="text" name="get_lastName" /></td>
						</tr>
						<tr>
							<td>First Name: </td>
							<td><input type="text" name="get_firstName" /></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><input type="submit" /></td>
						</tr>
					</table>
				</form><!-- close getStudent form -->
			</div>
<?php include('include/footer.php') ?>
