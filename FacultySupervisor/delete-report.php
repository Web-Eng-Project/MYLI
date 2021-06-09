<?php
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_select_db($link, "myli") or die(mysqli_error($link));
$id=$_GET["id"];
mysqli_query($link,"delete from `report` where id=$id");

?>

<script type="text/javascript">
window.location="Report.php";

</script>