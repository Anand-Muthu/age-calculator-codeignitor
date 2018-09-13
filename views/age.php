<!DOCTYPE html>
<html>
<head>
	<title> Age Calculator </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<center><h2>Age Calculator</h2></center>


<form method="post">
	<table class="table">
		<tr>
			<td>Enter ur Date Of Birth:</td>
			<td><input type="date" name="dob"></td>
		</tr>
		<tr>
			<td>Enter the Date To know Ur current age</td>
			<td><input type="date" name="cdob"></td>
		</tr>
		<tr>
			<td><input type="submit" name="age" value="Calc Ur Age"></td>
		</tr>
		<tr>
			 <td>Current age is</td>
			 <td><?php echo @$year.' ' .@$month.' '. @$days; ?></td> 
		</tr>
	</table>
</form>
</body>
</html>