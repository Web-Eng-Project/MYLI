<?php
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($link, "myli") or die(mysqli_error($link));
    $display = "SELECT * FROM `report`";
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
     <a href="#">LogBook Progress</a>
     <a href="#">Performance Mark</a>
     <a href="./Report.php">Report</a>
    </div>
	</nav>
	
	<article>
	<h1 style="font-size: 200%">Student List</h1>
	<body>
	<center>
<h1>Report</h1>
</center>
<form name="Form">
<table style="width:100%">

<?php
        while ($row=mysqli_fetch_array($rs_display)){ 
          ?>

  <tr>
    <th rowspan="3" style="width:70px"></th>
    <th><label for="id">Report ID:</label> &nbsp;
    <?php echo $row['Report_Id']; ?>
    </th> 
    <th><label for="id">Student ID:</label> &nbsp;
    <?php echo $row['Student_Id']; ?>
    </th>
  </tr>
  <tr>
    <th><label for="id">Lecturer ID:</label> &nbsp;
    <?php echo $row['Lecturer_Id']; ?>
    </th>
    <th><label for="mark">Total Mark</label> &nbsp;
    <?php echo $row['Total_Mark']; ?>
    </th>
  </tr>
  <tr>
    <td>
      <table>
      <tr>
        <th>Performance Mark</th>
        <td style="width: 20%;"><input style="height: 30px;" type="number" id="performance_mark" name="performance_mark"></td>
      </tr>
      <tr>
        <th>Attendance Mark</th>
        <td style="width: 20%;"><input style="height: 30px;" type="number" id="attendance_mark" name="attendance_mark"></td>
      </tr>
      <tr>
        <th>Total Mark</th>
        <td style="width: 20%;"><p id="totalmark"></p></td>
      </tr>
      </table>
    </td>
    <td><label for="report_comment">Comment:<br>            </label>
         <input style="width: 100%; height: 30px;" type="text" id="report_comment" name="report_comment"><br><br>
      <input type="button" value="Internship Marking Result" onclick = "mark()" />
      <p id="mark"></p>
    </td>
  </tr>

  <?php
        }
          ?>

</table>
</form>
	</body>
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