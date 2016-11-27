<?php
require("db_conn.php");
?>




<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<select name="catergory">
  <option value="">Select...</option>
  <option value="1">Movies</option>
  <option value="2">Tv Series</option>
  <option value = "3">Novels</option>
</select>


Name: <input type="text" name="nm_mov">
<input type = "submit" value = "Submit">

<br /><br />
<!--
<button type="button" onclick="runSql(1)" name = "rec_mov">Recent Movies</button>
<br /><br />
<button type="button" onclick="runSql(2)" name = "old_mov">Older Movies</button>
<br /><br />
<button type="button" onclick="runSql(3)" name = "top_rated">Top Rated</button>
<br /><br />
<button type="button" onclick="alert('Hello World!')">Click Me!</button>
<br /><br />
<button type="button" onclick="alert('Hello World!')">Click Me!</button>
<br /><br />
-->

</form>



<?php
// define variables and set to empty values
$nm_mov = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nm_mov = test_input($_POST["nm_mov"]);
  
  $table = $_POST['catergory'];

  if($table == 1){
  	$tab = `movies`;
  }elseif($table == 2){
  	$tab = `tv_series`;
  }else{
  	$tab = `novels`;
  }

  
  $sql = "SELECT * FROM `movies` WHERE `nm_mov` LIKE '%$nm_mov%'";
  $result = mysqli_query($conn, $sql);

  $rows = mysqli_num_rows($result);
  
  if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result -> fetch_assoc()) {
				echo "<pre>";
				echo "id: " . $row["id"]. " Name: " . $row["nm_mov"]. " imdb: ".$row["imdb_rate"].
						" owned by :".$row["owned_by"]." email: ".$row["email_id"].
						" contact_no: ".$row["contact_no"]."<br>";
				echo "</pre>";
			}
		} else {
			echo "0 results";
		}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//SELECT * FROM `movies` WHERE `nm_mov` LIKE $nm_mov


//echo $nm_mov;




?>
