<!DOCTYPE html>
<html>
<head>
<title>Faculty Supervisor Site</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="ann.css">
<style>
input[type="checkbox"] {
		transform:scale(2, 2);
}
</style>
<script type="text/javascript">
</script>
</head>
<body>

<header>
  <img style="display: inline;" src="Logo UMP.png" width="300" height="150">
  <h1 style="color:white; display: inline; padding:25px; font-family:Verdana; font-size: 300%;">UMP MyLI</h1>
</header>

<section>
  <nav>
  <h2 style="text-align: center;">Faculty Supervisor</h2>
  <img src="neelofa.png" width="150" height="150">
  <h3 style="text-align:center;">Nur Maznah</h3>
  <p style="color:white;">ID: S001</p>
  <p style="color:white;">Email: Nur_Maznah77@email.com</p>
  <p style="color:white;">Faculty: FKOM</p>
  <hr></hr>
    <div class="vertical-menu">
     <a href="./dashboard.php">Lecturer Dashboard</a>
     <a href="./view.php">Student List</a>
     <a href="./LogbookView.php">LogBook Progress</a>
     <a href="#">Performance Mark</a>
     <a href="./Report.php">Report</a>
    </div>
	</nav>
	<center>
    <h1><b>Update List</b></h1>
        <div>
            <form action="ListController.php" method="post">
                <table style="border: 3px solid maroon;margin:10px;padding:50px; width:auto;">
                    <tr>
                        <td><label for="List_ID">List ID:</label></td>
                        <td colspan="5"><input type="text" name="List_ID"/></td>
                    </tr>
                    <tr>
                        <td><label for="Student_Id">Student ID:</label></td>
                        <td colspan="5"><input type="text" name="Student_Id"/></td>
                    </tr>
                    <tr>
                        <td><label for="Name">Name:</label></td>
                        <td colspan="5"><input type="text" name="Name"/></td>
                    </tr>
                    <tr>
                        <td><label for="Phone_Num">Phone Number:</label></td>
                        <td colspan="5"><input type="text" name="Phone_Num"/></td>
                    </tr>
					<tr>
                        <td><label for="Email">Email:</label></td>
                        <td colspan="5"><input type="text" name="Email"/></td>
                    </tr>
					<tr>
                        <td><label for="Company_Name">Company Name:</label></td>
                        <td colspan="5"><input type="text" name="Company_Name"/></td>
                    </tr>
					<tr>
                        <td><label for="Company_Address">Company Address:</label></td>
                        <td colspan="5"><input type="text" name="Company_Address"/></td>
                    </tr>
                   <tr>
                        <td>
                            <br><input type="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</section>