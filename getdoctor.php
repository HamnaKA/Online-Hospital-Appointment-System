<?php
$link=mysqli_connect("localhost","root","bcamysql","db_hospitalapp");
$sid=$_GET["id"];
$sql = "select d_id,fname from tb_doctor where depart='".$sid."'"; 
$result = mysqli_query($link,$sql);
//echo "<option value=''>------- Select Car------</option>";
while($row = mysqli_fetch_assoc($result))
{
    echo "<option value='".$row["d_id"]."'>".$row["fname"]."</option>";
  
}
?>

