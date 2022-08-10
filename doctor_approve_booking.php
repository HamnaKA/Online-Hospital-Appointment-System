
<?php
include 'doctorbase.php';
session_start();
$b_id=$_GET['request_id'];

?>

          <br><br><br><br>


<div class="contact">

    <div class="container" style="margin-left: -9px;">
        <h2 class="w3ls_head">Appointment details</h2><br>
			<p class="w3layouts_para"></p>
                        <div class="contact-right-w3-agile" >
<form method="post">
<table width="1000" align="center" border="1" id="data">
  <tr>
    <th>Appointment No</th>
    <th>Time</th>

  </tr>
  <tr>
      <td><input type="text" name="app_no"required=""</td>
      <td><input type="time" name="time"required=""</td>
  </tr>
  <tr>
      <td colspan="2" align="center"><input type="submit" value="Submit" name="submit"/></td></tr>
  </tr>
</table>
</form>
                        </div>
                </div>
</div>
    <style>

    #data th{
        background-color: black;
        color: white;
        font-size: large;
        padding: 10px 10px 10px 10px;
    }
     #data td{

        padding: 10px 10px 10px 10px;
    }
</style>







 <!-- footer -->
 <br><br><br><br><br><br><br><br>
 <?php
include 'connection.php';
 if(isset($_POST['submit']))
 {
     $app_no=$_POST['app_no'];
     $time=$_POST['time'];

     $qry="update tb_booking set app_no='$app_no',time='$time',status='accepted' where b_id='$b_id'";
     
     $res=mysqli_query($link,$qry);
     if($res){
          echo'<script>alert("Approved............")</script>';
    echo '<script>location.href="doctor_view_booking.php"</script>';
     }

 }

         include 'footer.php';

 ?>
