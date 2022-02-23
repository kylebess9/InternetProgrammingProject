<?php include ('assets/insert.php'); ?>

<html>
<head>
<title>Greg's Games | New User</title>
<link href="greg.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
	<h1 id="logo"><em>Carla's Students</em></h1>
	
	<div id="content">
		<div style="width: 400px; text-align: center; padding-left: 33%">
			<div style="text-align:center; width: 400px; padding-left:33%; border: 1px solid white; padding: 5px; margin-right: 50px;">
				<p>Add Students Form </p><hr />
				<form style="padding-left: 10%;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<table>
						<tr>
							<td><p>Last name: </td>
							<td><input type="text" size = "30" name="lastName" /></p></td>
						</tr>
						<tr>
							<td><p>First name: </td>
							<td><input type="text" size = "30" name="firstName" /></p></td>
						</tr>
						<tr>
							<td><p>Parent's email: </td>
							<td><input type="text" size = "30" name="contactEmail" /></p></td>
						</tr>
						<tr>
							<td><p>Username:  </td>
							<td><input type="text" size = "30" name="username" /></p></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><input type="submit" name="frmAddStudent" /></td>
						</tr>
					</table>
				</form><!-- close insert form -->
				<hr />
				<p><a href = "sendEmail.php">Send a report by email</a></p>
			</div>
		</div>
<?php include('include/footer.php') ?>
