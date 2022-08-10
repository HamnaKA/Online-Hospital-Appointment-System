<?php
include 'adminbase.php';
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <br><br><br><br><br><br>
    <div>

           <form >
        <table border='5' align="center" cellspacing="5" >
            <h2  align="center" > <b> Doctors ......</b></h2><br><br><br>
            <th> DOCTOR ID    </th>
            <th> FIRST NAME     </th>
            <th> LAST NAME </th>
            <th> GENDER </th>
            <th> DEPARTMENT </th>
            <th> LICENSE ID </th>
            <th> HOSPITAL ID </th>
            <th> HOLIDAY </th>
            <th> PHONE NUMBER </th>
            <th> EMAIL </th>
            
            <?php
            include 'connection.php';
            $qry=mysqli_query($link,"select *from tb_doctor ");
            while($row=mysqli_fetch_array($qry))
            {
                echo '<tr><td>'.$row['d_id'].'</td><td>'.$row['fname'].'</td><td>'.$row['lname'].'</td><td>'.$row['gender'].'</td><td>'.$row['depart'].'</td><td>'.$row['lice_id'].'</td><td>'.$row['h_id'].'</td><td>'.$row['holiday'].'</td><td>'.$row['phone'].'</td><td>'.$row['username'].'</td></tr>'; 
            }
            ?>
            
        </table>
            </form>  
      
    </div>
    </body>
        </html>
        <br><br><br><br><br><br><br><br>
        <?php
          include 'footer.php';              
                
?>
