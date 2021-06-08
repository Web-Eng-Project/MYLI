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
        <table>
        <h1><b>Delete Order</b></h1>
        <div>
            <form action="" method="post">
                <table style="border: 5px solid black;margin:20px;padding:100px; width:auto;">
                    <tr>
                        <th>Enter Order ID to delete</th>
                    </tr>
                    <tr>
                        <td><label for="List_ID">List ID:</label></td>
                        <td colspan="5"><input type="text" name="List_ID"/></td>
                        <td colspan="5"><input type="submit" name="delete" value="Delete ID" /></td>
                    </tr>
                </table>
            </form>
        </div>
			<?php
                    $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
                    mysqli_select_db($link, "myli") or die(mysqli_error());
                     
                    if(isset($_POST['delete']))
                    {
                        $List_ID = $_POST['List_ID'];
                     
                    $query = "DELETE FROM `studentlist` WHERE List_ID='$List_ID' ";
                    $query_run = mysqli_query($link,$query);
                    
                    if($query_run)
                    {
                        echo "Records were deleted successfully.";
                    } else
                    {
                        echo "ERROR: Could not able to execute.";
                    }
                    }
                ?>
			
        </table>
        <br>
    </center>
	</body>           
	<input type="button" value="Student List" onclick="location.href='view.php'">
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