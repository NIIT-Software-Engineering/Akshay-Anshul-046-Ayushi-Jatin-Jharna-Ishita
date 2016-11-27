<?php
require("db_conn.php");
?>

<?php

if(isset($_POST['nm_ser']) && isset($_POST['no_ser']) && isset($_POST['no_epi'])&& isset($_POST['quality']) && isset($_POST['owner'])&& isset($_POST['email'])&& isset($_POST['contact']) ){

		$nm_ser  = $_POST['nm_ser'];
		$no_season = $_POST['no_ser'];
		$no_episodes = $_POST['no_epi'];
		$qlty = $_POST['quality'];
		$owner = $_POST['owner'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];

		//echo $nm_ser;
				
	
		//print_r($_POST);
		
		$sql = "INSERT INTO `tv_series`(`id`, `nm_series`, `no_season`, `no_episodes`, `qlty`, `own_by`, `email_id`, `contact_no`) 
				VALUES (NULL, '$nm_ser', '$no_season', '$no_episodes', '$qlty', '$owner', '$email', '$contact')";
				
		$res = mysqli_query($conn, $sql);
		//header("location:tv_series_add.php?msg=Record Added Successfully!");
		echo "yes";
	}else{
		echo "Invalid attempt";
	}


?>






<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name:<input type="text" name="nm_ser" />
    <br /><br />
    No of Series:<input type="text" name="no_ser" />
    <br /><br />
    No of Episodes:<input type="text" name="no_epi" />
    <br /><br />
    Quality:<input type="text" name="quality" />
    <br /><br />
    Owner:<input type="text" name="owner" />
    <br /><br />
    Email:<input type="text" name="email" />
    <br /><br />
    Contact:<input type="text" name="contact" />
    <br /><br />
<input type="submit" value = "Add Series" />
</form>








