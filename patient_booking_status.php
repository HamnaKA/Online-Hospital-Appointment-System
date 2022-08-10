  <?php
   session_start();
  include 'patientbase.php';
  ?>
<br><br><br><br>
    <div>
        <form action="">
        <table border="2" align="center">
            <th>Doctor Name</th>
               <th>Date</th>
               <th> Time </th>
               <th>Appointment No </th>
               <th> Status </th>
        <?php
        include 'connection.php';

         $id=$_SESSION['id'];


           $qry="SELECT tb_booking.`date`,tb_booking.`time`,tb_booking.`app_no`,tb_booking.`status`,tb_doctor.`fname` FROM tb_booking,tb_doctor WHERE tb_booking.`d_id`=tb_doctor.`d_id` AND tb_booking.`p_id`='$id'";

           $res=mysqli_query($link,$qry);
         while($row=mysqli_fetch_array($res))
         {
             echo '<tr><td align="center">'.$row['fname'].'</td><td align="center">'.$row['date'].'</td><td>'.$row['time'].'</td><td align="center">'.$row['app_no'].'</td><td>'.$row['status'].'</td></tr>';
         }


           ?>


            </table>
            </form>


    </div>


         <div>
 <!-- footer -->
 <br><br><br><br><br><br><br>
 <?php
            //include 'footer.php';
            ?>
