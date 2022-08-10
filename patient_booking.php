<?php
session_start();
include 'patientbase.php';
?>
<br><br><br><br>
    <div>

        <form action="" method="POST">
            <table align="center">

                   <tr><td>Hospital Name</td>
                       <td><select class="form-control" id="hid" name="hid">
                                 <?php
                                 include 'connection.php';
                                  $qry1="select * from tb_hospital";
                                  $res1=mysqli_query($link,$qry1);
                                  while($row1=mysqli_fetch_array($res1))
                                    {
                                       echo "<option value=".$row1['h_id'].">".$row1['h_name']."</option>";
                                    }
                                 ?>
                                 </select></td>


                <tr><td>Department</td>
                    <td> <select class="form-control"  name="depart" id="depart" >

								</select></td></tr>

                 <tr><td>Doctor</td>
                     <td> <select class="form-control"  name="did" id="did">

								</select></td></tr>

                <tr><td>Date</td>
                    <td><input type="date" name="date" class="form-control"/></td></tr>




                <tr><td align="center" ><input type="submit" name="register" value="REGISTER" class="btn btn-primary button mt-md-5 mt-4"/></td></tr>

            </table>
        </form>

    </div>
<br><br><br><br><br><br>
<script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>


<script>
    $(document).ready(function() {
      $( "#hid" ).change(function () {
      var sid = $("#hid").val();
      //var sid=document.getElementById('cake_id').value;
      debugger;
      $.ajax({
      url: "getdepartment.php?id="+sid,
      type:'POST',
      success: function(data)
      {
        var dt=$.trim(data);
        $("#depart").html(dt);

      },error:function(xhr,error)
        {
            alert(error);
        }
      });
  });
});




    </script>
<script>
    $(document).ready(function() {
      $( "#depart" ).change(function () {
      var sid = $("#depart").val();
      //var sid=document.getElementById('cake_id').value;
      debugger;
      $.ajax({
      url: "getdoctor.php?id="+sid,
      type:'POST',
      success: function(data)
      {
        var dt=$.trim(data);
        $("#did").html(dt);

      },error:function(xhr,error)
        {
            alert(error);
        }
      });
  });
});




    </script>
<?php
include 'connection.php';
if(isset($_POST['register'])){

   $id=$_SESSION['id'];
   $h_id=$_POST['hid'];
   $doc_id=$_POST['did'];
   $date=$_POST['date'];

    $qry="insert into tb_booking(p_id,d_id,date,status) values('$id','$doc_id','$date','please wait')";
    $res=mysqli_query($link,$qry);

    if ($res){

          echo '<script>alert("success")</script>';
      }else {
          echo '<script>alert("Cancelled")</script>';
      }
}
//include 'footer.php';
?>
