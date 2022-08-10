<?php

include 'commonbase.php';
?>
<br><br><br><br>
    <div>
        
        <form action="" method="POST">
            <table align="center">
                <tr><td>First Name</td>
                    <td><input type="text" name="fname" class="form-control"/></td></tr>
                <tr><td>Last Name</td>
                    <td><input type="text" name="lname" class="form-control"/></td></tr>
                <tr><td>Gender</td>
                    <td><input type="radio" name="gender" value="male" />Male
                    <input type="radio" name="gender" value="female" />Female</td></tr>
                <tr><td>Date Of Birth</td>
                    <td><input type="date" name="dob" class="form-control"/></td></tr> 
                <tr><td>Address Id</td>
                    <td><input type="text" name="add" class="form-control"/></td></tr>
                <tr><td>Locality</td>
                    <td><input type="text" name="loc" class="form-control"/></td></tr>

                <tr><td>Town</td>
                    <td><input type="text" name="town" class="form-control"/></td></tr>
                <tr><td>District</td>
                      <td><select name="dis" class="form-control">
                                    <option value="Kasaragod">Kasaragod</option>
                                    <option value="Kannoor">Kannoor</option>
                                    <option value="wayanadu">wayanadu</option>
                                    <option value="Thrissur">Thrissur</option>
                                    <option value="Ernakulam">Ernakulam</option>
                                    <option value="Alappuzha">Alappuzha</option>
                                    <option value="Idukki">Idukki</option>
                                    <option value="Kottayam">Kottayam</option>
                                    <option value="Patthanamthitta">Patthanamthitta</option>
                                    <option value="Kollam">Kollam</option>
                                    <option value="Malappuram">Malappuram</option>
                                    <option value="Kozhikode">Kozhikode</option>
                                    <option value="Palakkadu">Palakkadu</option>
                                    <option value="Thiruvanathapuram">Thiruvanathapuram</option>
                                </select></td></tr>
                <tr><td>Contact No</td>
                    <td><input type="number" name="phone" class="form-control"/></td></tr>
                <tr><td>UserName</td>
                    <td><input type="email" name="uname"  placeholder="email"class="form-control"/></td></tr>
                <tr><td>Password</td>
                    <td><input type="password" name="password" class="form-control"/></td></tr>
                <tr><td align="center" ><input type="submit" name="register" value="REGISTER" class="btn btn-primary button mt-md-5 mt-4"/></td></tr>
                
            </table>
        </form>  
        
    </div>
<br><br><br><br><br><br>

<?php
include 'connection.php';
if(isset($_POST['register'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $addr=$_POST['add'];
     $locality=$_POST['loc'];
    $town=$_POST['town'];
    $dis=$_POST['dis'];
    $phone=$_POST['phone'];
    $username=$_POST['uname'];
    $password=$_POST['password'];
    
      $qry2="select count(*) as count from tb_patient where username='$username'";
      $res2=mysqli_query($link,$qry2);
      $row2=mysqli_fetch_array($res2);
      if($row2['count']>0)
      {
          echo '<script>alert("Already Exist............")</script>';
      }
 else 
          
 {
    
    $qry="insert into tb_patient(fname,lname,gender,dob,address,locality,town,district,phone,username) values('$fname','$lname','$gender','$dob','$addr','$locality','$town','$dis','$phone','$username')";
    $res=mysqli_query($link,$qry);
    echo "$qry";
    $qry1="insert into tb_login(username,password,usertype)values('$username','$password','patient')";
    echo "$qry1";
    $res1=mysqli_query($link,$qry1);
    if ($res){
      if ($res1){
          echo '<script>alert("success")</script>';
      }else {
          echo '<script>alert("Cancelled")</script>';
      }
      
        }
        
    }
}

include 'footer.php';
?>