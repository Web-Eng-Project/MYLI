<?php
	$link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

	mysqli_select_db($link, "myli") or die(mysqli_error());
    
    $Logbook_ID = $_POST['Logbook_ID'];
    $Student_Id = $_POST['Student_Id'];
    $Activity = $_POST['Logbook_Details'];
	$Date = $_POST['Date'];

    $query = "insert into `logbookprogress` values('$Logbook_ID', '$Student_Id', '$Logbook_Details', '$Date')" or die(mysqli_error());
    $result = mysqli_query($link, $query);

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
     <a href="#">LogBook Progress</a>
     <a href="#">Performance Mark</a>
     <a href="./Report.php">Report</a>
    </div>
   </nav>
	<center>
    <h1><b>Update List</b></h1>
         <div>
            <table style="width:30%; border: 3px solid maroon;" border="1">
                <tr>
                    <td><label for="Logbook_ID">Logbook ID:</label></td>
                    <td colspan="5"><?php echo $Logbook_ID ?></td>
                </tr>
                <tr>
                    <td><label for="Student_Id">Student ID:</label></td>
                    <td colspan="5"><?php echo $Student_Id ?></td>
                </tr>
                <tr>
                    <td><label for="Logbook_Details">Logbook Details:</label></td>
                    <td colspan="5"><?php echo $Logbook_Details ?></td>
                </tr>
                <tr>
                    <td><label for="Date">Date:</label></td>
                    <td colspan="5"><?php echo $Date ?></td>
                </tr>
				
            </table><br>
              <br><button onclick="location.href='view.php'">Display List</button>
			<?php
            if($result) {
		        echo("Data inserted");
			}
		    else {
			    die("Insert failed. Logbook_ID already exist.");
            }
            mysqli_close($link);
            ?>
        </div>


    </center>
	
</section>

<footer>
  <p>&copy 2021 UMP MyLI. All rights reserved.</p>
</footer>
</body>
</html>