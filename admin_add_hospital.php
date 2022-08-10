<?php
include 'adminbase.php';
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <br><br>
   <div>
        <form action="" method="POST" enctype="multipart/form-data">
        
        <table align="center" >
            <h2  align="center" > <b>Add Hospitals Here......</b></h2><br><br><br>
            <tr>
                <td><b>Hospital Name :</b></td>
                <td><input type="text" name="hname" required="" class="form-control"/></td>
            </tr>
            
            
             <tr>
                 <td colspan="2" align="center"><input type="submit" name="submit" value="ADD" class="btn btn-success"/></td>
            </tr>
    </table>
            </form>
    </div>
    </body>
        </html>
             <br><br><br><br><br><br><br><br>
        <?php
          include 'footer.php';              
                
?>
        <?php
          include 'connection.php';              
                
if (isset($_POST['submit'])){
  
   $hname=$_POST['hname'];
   
   $hname1=strtolower($hname);
   $qry="select count(*) from tb_hospital where lcase(h_name)='$hname1'";
   $res=mysqli_query($link,$qry);
   $row=mysqli_fetch_array($res);
   
   if($row[0]>0)
   {
    echo '<script>alert(" Already added ....");</script>';
       
   }else{
   
   $qry1="insert into tb_hospital(h_name)values('$hname')";
   $res1=mysqli_query($link,$qry1);
   if($res1){
   echo '<script>alert(" Hospital added ....");</script>';
   }
   
   }  
}
?>
