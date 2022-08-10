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
                <tr><td>Qualification</td>
                    <td><input type="text" name="quali" class="form-control"/></td></tr>
                <tr><td>Department</td>
                            <td><select name="depart" class="form-control">
                                    <option value="ortho">Ortho</option>
                                    <option value="dental">Dental</option>
                                    <option value="cardiology">Cardiology</option>
                                    <option value="ENT">ENT</option>
                                    <option value="nefrology">nephrology</option>
                                    <option value="gynocology">Gynocology</option>
                                    <option value="dermotology">dermatology</option>
                                </select></td></tr>

                <tr><td>License Id</td>
                    <td><input type="text" name="lid" class="form-control"/></td></tr>
                <tr><td>Hospital Name</td>
                       <td><select class="form-control" id="hid" name="hid">
                                 <?php
                                  include 'connection.php';
                                  $qry1=("select * from tb_hospital");
                                  $res1=mysqli_query($link,$qry1);
                                  while($row1=mysqli_fetch_array($res1))
                                    {
                                       echo "<option value=".$row1['h_id'].">".$row1['h_name']."</option>";
                                    }
                                 ?>
                                 </select></td>
                <tr><td>Location</td>
                    <td><input type="text" name="loc" class="form-control"/></td></tr>
                <tr><td>Holiday</td>
                    <td><select name="holi" class="form-control">
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                </select></td></tr>

                <tr><td>Start Time</td>
                    <td><input type="time" name="time1" class="form-control"/></td></tr>
                <tr><td>End Time</td>
                    <td><input type="time" name="time2" class="form-control"/></td></tr>
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
//include 'connection.php';
if(isset($_POST['register'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $quali=$_POST['quali'];
    $depart=$_POST['depart'];
     $lid=$_POST['lid'];
    $place=$_POST['loc'];
    $hid=$_POST['hid'];
    $holi=$_POST['holi'];
    $stime=$_POST['time1'];
    $etime=$_POST['time2'];
    $phone=$_POST['phone'];
    $username=$_POST['uname'];
    $password=$_POST['password'];

      $qry2="select count(*) as count from tb_doctor where username='$username'";
      $res2=mysqli_query($link,$qry2);
      $row2=mysqli_fetch_array($res2);
      if($row2['count']>0)
      {
          echo '<script>alert("Already Exist............")</script>';
      }
 else

 {

    $qry="insert into tb_doctor(fname,lname,gender,quali,depart,lice_id,h_id,location,holiday,stime,etime,phone,username) values('$fname','$lname','$gender','$quali','$depart','$lid','$hid','$place','$holi','$stime','$etime','$phone','$username')";
    $res=mysqli_query($link,$qry);

    $qry1="insert into tb_login(username,password,usertype)values('$username','$password','doctor')";
    $res1=  mysqli_query($link,$qry1);
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
