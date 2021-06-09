<?php
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($link, "myli") or die(mysqli_error($link));
    $display = "SELECT * FROM `studentlist`";
    $rs_display = mysqli_query($link, $display) or die(mysqli_error($link));
    $query="SELECT Company_Name, count(*) as number FROM studentlist GROUP BY Company_Name";
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
.vertical-menu {
  width: 420px;
}
input[type="checkbox"] {
		transform:scale(2, 2);
}
div {
  padding: 10px;
  border: none;
  margin: 0;
}
table class = "center"{
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}
.makesmall div{
  width:10px;
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">  
  google.charts.load('current', {'packages':['corechart']});  
  google.charts.setOnLoadCallback(drawChart);  
  function drawChart(){  
    var data = google.visualization.arrayToDataTable([  
      ['Company', 'Number'],  
      <?php  
        while($row = mysqli_fetch_array($result)){ 
          echo "['".$row["Company_Name"]."', ".$row["number"]."],";
        } 
      ?>  
      ]);  
    var options = {  
      title: 'Number of student in the Company',  
      //is3D:true,  
      pieHole: 0.4  
    };  
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
    chart.draw(data, options);  
  }  
</script>  
</head>
<body>

<header>
  <img style="display: inline;" src="Logo UMP.png" width="300" height="150">
  <h1 style="color:white; display: inline; padding:25px; font-family:Verdana; font-size: 300%;">UMP MyLI</h1>
</header>

<section>
  <nav style= "width: 30%">
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
      <a href="./LogbookView.php">Student Progress</a>
      <a href="./Report.php">Report</a>
    </div>
	</nav>
	
	<article>
	  <h1 style="font-size: 200%">Student List</h1>
	  <center>
      <table>
        <tr>
					<th>List ID</th>
					<th>Student ID</th>
					<th>Name</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>Company Name</th>
					<th>Location</th>
			  </tr>
			  <?php while ($row=mysqli_fetch_array($rs_display)){ ?>
          <tr style="text-align:center";>
            <td colspan="1"><?php echo $row['List_ID']?></td>
            <td colspan="1"><?php echo $row['Student_Id']?></td>
            <td colspan="1"><?php echo $row['Name']?></td>
            <td colspan="1"><?php echo $row['Phone_Num']?></td>
					  <td colspan="1"><?php echo $row['Email']?></td>
					  <td colspan="1"><?php echo $row['Company_Name']?></td>
					  <td colspan="1"><?php echo $row['Company_Address']?></td>
          </tr>
			  <?php } ?>
      </table>
      <br>
      <button onclick="location.href='UpdateList.php'">Add Student</button>
      <button onclick="location.href='DeleteStudent.php'">Delete Student</button>
      <br>
    </center>
    <div id = "sidecontent" class = "well pull-right">
			<br>
			<br>
      <h3 align="center">Percentange Number Of Student Based On Company</h3>  
      <div class="makesmall" id="piechart"></div>  
    </div>
	</article>
</section>

<footer><p>&copy 2021 UMP MyLI. All rights reserved.</p></footer>
</body>
</html>
<?php
    mysqli_close($link);
?>