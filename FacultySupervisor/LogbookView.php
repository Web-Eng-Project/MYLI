<?php
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($link, "myli") or die(mysqli_error($link));
    $display = "SELECT * FROM `logbookprogress`";
    $rs_display = mysqli_query($link, $display) or die(mysqli_error($link));
?>
<!DOCTYPE html>
<html>
<head>
<title>Faculty Supervisor Site</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="ann.css">
<script src="./js/module4.js"></script>
<style>
.vertical-menu {
  width: 420px;
}
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
.makesmall{
    width:200px;
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
    <a href="./dashboard.php">Lecturer Dashboard</a>
     <a href="./view.php">Student List</a>
     <a href="./LogbookView.php">LogBook Progress</a>
     <a href="#">Performance Mark</a>
     <a href="./Report.php">Report</a>
    </div>
	</nav>
	
	<article>
	<h1 style="font-size: 200%">Logbook Progress</h1>
	<body>
	<center>
        <table>
        <tr>
					<th>Logbook ID</th>
					<th>Student ID</th>
					<th>Activity</th>
					<th>Date</th>
			  </tr>

			  <?php
          while ($row=mysqli_fetch_array($rs_display)){
        ?>
          <tr style="text-align:center";>
          <td colspan="1"><?php echo $row['Logbook_Id']?></td>
          <td colspan="1"><?php echo $row['Student_Id']?></td>
          <td colspan="1"><?php echo $row['Logbook_Details']?></td>
          <td colspan="1"><?php echo $row['Date']?></td>
          </tr>
        </table>
        <br>
        <br>
        <br>
        
        <table>
            <tr>
                <td>Assessment Type</td>
                <td>Total Percentage</td>
                <td>Total Marks</td>
                <td style="max-width:10%;">Student Marks</td>
                <td>Percentage</td>
            </tr>
            <tr>
                <th>Evaluation 1 Mark</th>
                <th>60%</th>
                <th>50</th>
                <th><input type="text" id="midsem" size="3" value=""></th>
                <th><div class="makesmall" id="outputdiv2"></div></th>
            </tr>

            <tr>
                <th>Evaluation 2 Mark</th>
                <th>40%</th>
                <th>50</th>
                <th><input type="text" id="endsem" size="3" value=""></th>
                <th><div class="makesmall" id="outputdiv3"></div></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th>Total Marks </th>
                <th><div class="makesmall" id="outputdiv"></div></th>
            </tr>
        </table>

        <br>
        <br>
        <br>
            <input type="button" value="Process" onclick="Percentage()">
                        <input type="reset">
                        <hr>
         <?php
             }
         ?>
    </center>
	</body>
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