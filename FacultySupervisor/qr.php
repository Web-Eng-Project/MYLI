<?php
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_select_db($link, "myli") or die(mysqli_error($link));
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>QR CODE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="ann.css">
        <link rel="stylesheet" type="text/css" href="./stylesheet/module4.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.vertical-menu {
  width: 420px;
}
input[type="checkbox"] {
		transform:scale(2, 2);
}
</style>
    </head>
    <body>
<header>
  <img style="display: inline;" src="Logo UMP.png" width="300" height="150">
  <h1 style="color:white; display: inline; padding:25px; font-family:Verdana; font-size: 300%;">UMP MyLI</h1>
</header>
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

<div align="center">

<h1>Generate QR Code</h1>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter username">
    <input type="password" name="password" placeholder="Enter password">
    <input type="submit" name="btnsubmit" value="GENERATE">
</form>

<?php


if(isset($_POST['btnsubmit']))
{
    $data = trim($_POST['username']);
    $data = trim($_POST['password']);

    mysqli_query($link, "insert into qr values (NULL, '$_POST[username]', '$_POST[password]')");

    echo "<h2>Here is your QR Code</h2>";
    echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=150x150&ch1=$data' height=250 width=250/>";
    echo "<button onclick=window.print()>Print</button>";

    ?>

<?php

}

?>


</div>


        </html>