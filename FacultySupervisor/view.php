<?php
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($link, "myli") or die(mysqli_error($link));
    $display = "SELECT * FROM `studentlist`";
    $rs_display = mysqli_query($link, $display) or die(mysqli_error($link));
?>
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
div {
  width: 1500px;
  padding: 10px;
  border: 2px solid black;
  margin: 0;
}
table class = "center"{
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 4px solid #dddddd;
  text-align: center;
  padding: 3px;
}
table.center {
  margin-top:200px;
  margin-left: auto; 
  margin-right: auto;
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
	 <a href="StuLec.html">Student List</a>
     <a href="#">LogBook Progress</a>
     <a href="#">Performance Mark</a>
     <a href="#">Report</a>
    </div>
	</nav>
	
	<article>
	<h1 style="font-size: 200%">Student List</h1>
	<body>
	<center>
        <table class = "center">
            <tr>
					<th>List ID</th>
					<th>Student ID</th>
					<th>Name</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>Company details</th>
					<th>Address</th>
			</tr>
			<?php
                    while ($row=mysqli_fetch_array($rs_display)){
                ?>
                    <tr style="text-align:center";>
                        <td colspan="1"><?php echo $row['List_ID']?></td>
                        <td colspan="1"><?php echo $row['Student_Id']?></td>
                        <td colspan="1"><?php echo $row['Name']?></td>
                        <td colspan="1"><?php echo $row['Phone_Num']?></td>
						<td colspan="1"><?php echo $row['Email']?></td>
						<td colspan="1"><?php echo $row['Company_Name']?></td>
						<td colspan="1"><?php echo $row['Company_Address']?></td>
                    </tr>
			<?php
                    }
                ?>
			
        </table>
        <br>
    </center>
	</body>
                
	<input type="button" value="Add Student" onclick="location.href='UpdateList.php'">
	</form>
	</article>
</section>

<footer>
  <p>&copy 2021 UMP MyLI. All rights reserved.</p>
</footer>
</body>
</html>
<?php
    mysqli_close($link);
?>