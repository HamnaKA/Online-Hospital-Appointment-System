<?php
 session_start();
include 'commonbase.php';
?>
<br><br><br><br><br><br>
    <div>
        
        <form action="" method="POST">
            <table align="center">
                <tr><td><input type="text" name="username" placeholder="UserName"class="form-control"/></td></tr>
                <tr><td><input type="password" name="password" placeholder="Password"class="form-control"/></td></tr>
                <tr><td align="center" ><input type="submit" name="login" value="LOGIN" class="btn btn-primary button mt-md-5 mt-4"/></td></tr>
                
            </table>
        </form>  
        
    </div>
<br><br><br><br><br><br>
<?php
include 'connection.php';
if(isset($_POST['login']))
    {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="select *from tb_login where username='$username' and password='$password'";
    $check=mysqli_query($link,$qry);
           if(mysqli_num_rows($check)==0)
               {
               echo "<script>alert('Username or password incorrect');</script>";
           }
           else
           {
               $row=  mysqli_fetch_assoc($check);           
              
               $_SESSION["id"]=$row["id"];
               if($row["usertype"]=="admin")
                {
                   echo "<script>window.location='admin_home.php'</script>";
                }
               else if($row["usertype"]=="doctor")
                             
                {
                  
                   $q2=  mysqli_query($link,"select * from tb_doctor where username='$username'");
                   $row1=  mysqli_fetch_array($q2);
                   $_SESSION['id']=$row1['d_id'];
                   
                        echo "<script>alert(' Welcome ...');</script>";
                    echo "<script>window.location='doctor_view_profile.php'</script>"; 
                }  else {
                     $q2=  mysqli_query($link,"select * from tb_patient where username='$username'");
                   $row1=  mysqli_fetch_array($q2);
                   $_SESSION['id']=$row1['p_id'];
                   
                        echo "<script>alert(' Welcome ...');</script>";
                    echo "<script>window.location='patient_home.php'</script>"; 
                    
                }
           
     }
    }
   
   
?>
<?php
 include 'footer.php';
?>