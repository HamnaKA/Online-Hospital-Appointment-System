
        <?php
        session_start();
        include 'patientbase.php';
                $id=$_SESSION['id'];
                include 'connection.php';
                $qry= mysqli_query($link,"select * from tb_patient  where p_id='$id'");
                $row=  mysqli_fetch_array($qry);

                ?>

    <br><br><br><br><br>
    <div>

			<div class="container" align="center">
				<div class="agileits-heading team-heading">
                                    <h3>Send Feedback</h3><br><br>
				</div>
				<div class="contact-form">
					<form action="" method="POST">
                                            <input type="text" placeholder="Name" value="<?php echo $row['fname'];?>" readonly="" class="form-control"><br>
                                            <input type="email" placeholder="Email"value="<?php echo $row['username'];?>" readonly="" class="form-control"><br>

                                            <textarea placeholder="Feedback" name="msg" required="" class="form-control" ></textarea><br>
                                                <div ><input type="submit" value="SEND" name="submit" class="btn btn-primary button mt-md-5 mt-4"></div>
					</form>
				</div>
			</div>




    </div>
     <br><br><br><br><br>
<?php
    include 'connection.php';
    if(isset($_POST['submit']))

    {
        $msg=$_POST['msg'];
        $qry="insert into tb_feedback(p_id,feedback) values('$id','$msg')";
        echo $qry;
        $sql=mysqli_query($link,$qry);
        if($sql)
        {
            echo '<script> alert("Feedback Sent.........")</script>';
        }
    }

    //include 'footer.php';

    ?>
