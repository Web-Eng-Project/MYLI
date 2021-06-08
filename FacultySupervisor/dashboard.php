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
.vertical-menu {
  border: 5px solid black;
  margin:20px;
  padding:100px;
  width:auto;
  
}
input[type="checkbox"] {
		transform:scale(2, 2);
}
div {
  background-image: url('Latihan_Industri.png');
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
    
	</nav>
	
	<article>
	<h1 style="font-size: 200%">Welcome to MyLI Web</h1>
    <h1 style="font-size: 100%">You are at the Faculty Supervisor Dashboard</h1>
	<body>
	<center>
        <table>
        <div class="vertical-menu">
     <a href="./view.php">Student List</a>
     <a href="./LogbookView.php">LogBook Progress</a>
     <a href="#">Performance Mark</a>
     <a href="./Report.php">Report</a>
    </div>
						
        </table>
        <br>
    </center>
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