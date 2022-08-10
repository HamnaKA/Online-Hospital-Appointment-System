<?php
$link=mysqli_connect("localhost","root","bcamysql","db_hospitalapp");
$sid=$_GET["id"];
$sql = "select distinct(depart) from tb_doctor where h_id='".$sid."'"; 
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_assoc($result))
{
    echo "<option value='".$row["depart"]."'>".$row["depart"]."</option>";
  
}
?>
