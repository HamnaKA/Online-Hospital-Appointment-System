
<?php
session_start();
include 'doctorbase.php';
?>

          <br><br><br><br>
    <div>
        <form action="">
        <table border="2" align="center">

               <th> Patient Name </th>
                <th> Gender </th>
                 <th> Phone No </th>
               <th> Date </th>

        <?php
        include 'connection.php';
         $id=$_SESSION['id'];
         $qry="SELECT tb_booking.b_id,tb_booking.`date`,tb_booking.`time`,tb_booking.`app_no`,tb_patient.`fname`,tb_patient.`gender`,tb_patient.`phone` FROM tb_booking,tb_patient WHERE tb_booking.`p_id`=tb_patient.`p_id` AND tb_booking.`d_id`='$id' AND tb_booking.`status`='please wait'";

           $res=mysqli_query($link,$qry);
         while($row=mysqli_fetch_array($res))
         {
             echo '<tr><td align="center">'.$row['fname'].'</td><td align="center">'.$row['gender'].'</td><td>'.$row['phone'].'</td><td align="center">'.$row['date'].'</td><td><a href="doctor_approve_booking.php?request_id='.$row['b_id'].'" class="btn btn-success">Accept</a></td></tr>';
         }




        ?>
            </table>
            </form>




        </div>





        <div>

 <!-- footer -->
 <br><br><br><br><br><br><br><br>
 <?php
        // include 'footer.php';

 ?>
