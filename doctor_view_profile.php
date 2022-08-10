<?php
 session_start();
include 'doctorbase.php';
                $id=$_SESSION['id'];
                include 'connection.php';
                $qry= mysqli_query($link,"select * from tb_doctor  where d_id='$id'");
                $row=  mysqli_fetch_array($qry);

                ?>
    <br><br><br><br>

<!--<div class="contact-info jarallax">-->
		<div class="contact-info">
<!--			<div class="container">-->
				<div class="agileits-heading team-heading">

				</div>
				<div class="contact-form">
                                    <form action="" method="POST">
                                        <table align="center">
                                            <tr><td><b>First Name </b></td> <td> <input type="text"  value="<?php echo $row['fname'];?>"  readonly=""/> </td> </tr>
                                            <tr><td><b> Last Name </b></td> <td> <input type="text"  value="<?php echo $row['lname'];?>"  readonly=""/> </td> </tr>
                                            <tr><td><b>Gender</b> </td> <td> <input type="text"  value="<?php echo $row['gender'];?>"  readonly="" /> </td> </tr>
                                            <tr><td><b>Qualification</b> </td> <td> <input type="text"  value="<?php echo $row['quali'];?>"  readonly="" /> </td> </tr>
                                            <tr><td><b>Holiday </b></td> <td> <input type="text"  value="<?php echo $row['holiday'];?>" readonly=""/> </td> </tr>
                                            <tr><td><b>Starting Time </b></td> <td> <input type="text"  value="<?php echo $row['stime'];?>"  readonly=""/> </td> </tr>
                                            <tr><td><b>Ending Time </b></td> <td> <input type="text"  value="<?php echo $row['etime'];?>" readonly=""/> </td> </tr>
                                            <tr><td><b>Phone number </b></td> <td> <input type="text"  value="<?php echo $row['phone'];?>"  readonly="" /> </td> </tr>
                                            <tr><td><b>User Name </b></td> <td> <input type="text"  value="<?php echo $row['username'];?>" readonly="" /> </td> </tr>



                                            </table>
					</form>
				</div>
<!--			</div>-->
		</div>
<!--	</div>-->


     <div>
             <br><br><br><br><br><br><br><br>
        <?php
        //  include 'footer.php';              

?>
