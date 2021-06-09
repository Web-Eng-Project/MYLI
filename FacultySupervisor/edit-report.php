<?php
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_select_db($link, "myli") or die(mysqli_error($link));
$id=$_GET["id"];

$Name="";
$Student_Id="";
$Total_Mark="";
$Comment="";


$res=mysqli_query($link,"select * from `report` where id=$id");
while($row=mysqli_fetch_array($res))
{
   $Name=$row["Name"];
   $Student_Id=$row["Student_Id"];
   $Total_Mark=$row["Total_Mark"];
   $Comment=$row["Comment"];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Faculty Supervisor Site</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="ann.css">
<link rel=stylesheet type="text/css" href="./stylesheet/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.vertical-menu {
  width: 420px;
}
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
     <a href="./LogbookView.php">Student Progress</a>
     <a href="./Report.php">Report</a>
    </div>
	</nav>
    
<div class="container">
  <div class="col-lg-4">
  <h2>Update Report</h2>
  <form action="" name="form1" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="email">Student Name</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Student Name" name="Name" required style="...">
    </div>
    <div class="form-group">
      <label for="pwd">Student ID</label>
      <input type="text" class="form-control" id="Student_Id" placeholder="Enter Student Matric ID" name="Student_Id"  required pattern="[A-Z]{0-9}" title="Please enter valid matric ID[A-Z and 1-15 digit only]" style="...">
    </div>
    <div class="form-group">
      <label for="pwd">Student Total Mark</label>
      <input type="text" class="form-control" id="Total_Mark" placeholder="Enter Student total mark" name="Total_Mark" required pattern="[0-100}" title="Please enter valid number[0-100 digit only]" style="...">
    </div>
    <div class="form-group">
      <label for="pwd">Comments</label>
      <input type="text" class="form-control" id="Comment" placeholder="Enter comment" name="Comment" required style="...">
    </div>

   
    <button type="submit" name="update" class="btn">Update</button>
  
  </form>
</div>
</div>

</div>

<footer>
  <p>&copy 2021 UMP MyLI. All rights reserved.</p>
</footer>


</body>

<?php
if(isset($_POST["update"]))
{

    mysqli_query($link,"update `report` set Name='$_POST[Name]', Student_Id='$_POST[Student_Id]', Total_Mark='$_POST[Total_Mark]', Comment='$_POST[Comment]' where id=$id");
  


    
    ?>

    <script type="text/javascript">
    window.location="Report.php";
    </script>

    <?php

}

?>
