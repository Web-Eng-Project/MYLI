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
     <a href="#">LogBook Progress</a>
     <a href="#">Performance Mark</a>
     <a href="./Report.php">Report</a>
    </div>
	</nav>
	
	<article>
	<h1 style="font-size: 200%">Student List</h1>
	<body>
	<div class="container">
  <div class="col-lg-4">
  <h2>Supervisor Report</h2>
  <form action="" name="form1" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label for="pwd">Report ID</label>
      <input type="text" class="form-control" id="Report_Id" placeholder="Enter Report ID" name="Report_Id" required style="...">
  </div>
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
    <button type="submit" name="insert" class="btn">Insert</button>
    <button type="submit" name="update" class="btn">Update</button>
    <button type="submit" name="delete" class="btn">Delete</button>
  </form>
</div>
</div>

<div class="col-lg-12">

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Report ID</th>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Student Total Mark</th>
        <th>Comments</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
     
    <?php

    $res=mysqli_query($link,"select * from report");
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
      echo "<td>"; echo $row["Report_Id"]; echo"</td>";
      echo "<td>"; echo $row["Name"]; echo"</td>";
      echo "<td>"; echo $row["Student_Id"]; echo"</td>";
      echo "<td>"; echo $row["Total_Mark"]; echo"</td>";
      echo "<td>"; echo $row["Comment"]; echo"</td>";
      echo "<td>"; ?> <a href="edit-report.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-success">Update</button></a> <?php echo"</td>";
      echo "<td>"; ?> <a href="delete-report.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo"</td>";
      echo "</tr>";
    }



    ?>
      
    </tbody>
  </table>

</div>

<footer>
  <p>&copy 2021 UMP MyLI. All rights reserved.</p>
</footer>
</body>

<?php
if(isset($_POST["insert"]))
{


  mysqli_query($link,"insert into report values (NULL, '$_POST[Report_Id]', '$_POST[Name]','$_POST[Student_Id]','$_POST[Total_Mark]', '$_POST[Comment]')");

  ?>
  <script type="text/javacsript">
  window.location.href=window.location.href;
</script>

<?php

}

if(isset($_POST["delete"]))
{

  mysqli_query($link,"delete from report where name='$_POST[Name]'") or die(mysqli_error($link));

  ?>
  <script type="text/javacsript">
  window.location.href=window.location.href;
</script>

<?php
}

if(isset($_POST["update"]))
{
  mysqli_query($link,"update report set name='$_POST[Student_Id]' where name='$_POST[Name]'") or die(mysqli_error($link));

  ?>
  <script type="text/javacsript">
  window.location.href=window.location.href;
</script>

<?php
}

?>

</html>
<?php
    mysqli_close($link);
?>