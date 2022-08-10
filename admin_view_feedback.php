<?php
include 'adminbase.php';
?>
<br><br><br><br><br>
    <div>
        
            <table border="2" class="table" style="width:35px" align="center">

        <th> Name</th>
        <th>Feedback</th>
       
         
                        
                       <?php
                 include 'connection.php';
                     $qry=mysqli_query($link,"select tb_feedback.feedback,tb_patient.fname from tb_feedback,tb_patient where tb_feedback.p_id=tb_patient.p_id ");
           
                    while($row=mysqli_fetch_array($qry))
                    {
                    echo'<tr><td>'.$row['fname'].'</td><td>'.$row['feedback'].'</td></tr>';
                    }
                    
                    
                    ?> 
         
</table>
        
 
    </div>
     <br><br><br><br><br>
     <?php
     include 'footer.php';
     ?>
    
