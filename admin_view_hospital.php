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
            <h2  align="center" > <b> Hospitals ......</b></h2><br><br><br>
            <th> HOSPITAL ID    </th>
            <th> HOSPITAL NAME     </th>
           
            
            <?php
            include 'connection.php';
            $qry=mysqli_query($link,"select *from tb_hospital ");
            while($row=mysqli_fetch_array($qry))
            {
                echo '<tr><td>'.$row['h_id'].'</td><td>'.$row['h_name'].'</td></tr>'; 
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
