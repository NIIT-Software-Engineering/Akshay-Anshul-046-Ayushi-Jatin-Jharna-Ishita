<?php
require("db_conn.php");
?>


<?php

if(isset($_POST['nm_mov']) && isset($_POST['quality']) && isset($_POST['imdb']) && isset($_POST['owner'])
	&& isset($_POST['email'])&& isset($_POST['contact']) ){
		$nm_mov  = $_POST['nm_mov'];
		$imdb = $_POST['imdb'];
		$quality = $_POST['quality'];
		$owner = $_POST['owner'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
				
	
		//print_r($_POST);
		
		$sql = "INSERT INTO `movies`(`id`, `nm_mov`, `imdb_rate`, `quality`, `owned_by`, `email_id`, `contact_no`) 
				VALUES (NULL, '$nm_mov', '$imdb', '$quality', '$owner', '$email', '$contact')";

		$res = mysqli_query($conn, $sql);
		//header("location:movies_add.php?msg=Record Added Successfully!");
		echo "Successful";
	}else{
		echo "Invalid attempt";
	}


?>






<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name:<input type="text" name="nm_mov" />
    <br /><br />
    IMDB:<input type="text" name="imdb" />
    <br /><br />
    Quality:<input type="text" name="quality" />
    <br /><br />
    Owner:<input type="text" name="owner" />
    <br /><br />
    Email:<input type="text" name="email" />
    <br /><br />
    Contact:<input type="text" name="contact" />
    <br /><br />
<input type="submit" value = "Add Movie" />
</form>








