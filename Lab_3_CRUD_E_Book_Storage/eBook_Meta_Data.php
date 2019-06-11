<!DOCTYPE HTML>
<html>
	<body>
		<h2>Lab 5 / Assignment 3. CRUD: Create, Update, Delete PHP MySQL</h2><br>
		<form method="post" action="eBook_Meta_Data.php">
			<div class="input-group">
				<label>Creator</label>
				<input type="text" name="creator" value="">
			</div>

			<div class="input-group">
				<label>Title</label>
				<input type="text" name="title" value="">
			</div>

			<div class="input-group">
				<label>Type</label>
				<select name="type" >
				<option ></option>
	  			<option value="Thriller">Thriller</option>
	  			<option value="Romance">Romance</option>
	  			<option value="Authobiography">Authobiography</option>
	  			<option value="Sci-Fi">Sci-Fi</option>
				</select>	
			</div>

			<div class="input-group">
				<label>Identifier</label>
				<input type="varchar" name="identifier" min="0" max="13" value="">
			</div>

			<div class="input-group">
	  			Date <input type="date" name="date">
			</div>

			<div class="input-group">
				<label>Language</label>
				<select name="language" >
				<option ></option>
	  			<option value="English-UK">English-UK</option>
	  			<option value="English-US">English-US</option>
	  			<option value="Russian">Russian</option>
	  			<option value="Japanese">Japanese</option>
				</select>	
			</div>

			<div class="input-group">
				<label>Description</label>
				<input type="text" name="description">
			</div>

			<div class="input-group" id="container">
				<button class="btn" type="submit" name="save" >Save</button>
				<button class="btn" name="retrieve" >Retrieve</button>
				<button class="btn" name="undo" >Undo</button>
			</div>
		</form>

		<!-- 
//			function order(){
//				//Connect to the db, initialize variables and save the submitted data
//				session_start();
//				$servername = "localhost";
//				$username = "root";
//				$password = "";
//				$dbname = "mysql";
//				$db = mysqli_connect('localhost', 'root', '', $dbname);
//
//				//mysqli_autocommit($db,FALSE); //turn ON transaction
//				if ($db->connect_error) {
//	   				die("Connection failed: " . $db->connect_error);
//				}
//				echo "Connected successfully";
//
//				$db->autocommit(false);
//				display();
//				retrieve();
//				// function undo(){
//					if (isset($_POST['undo'])) {
//						echo "<br> undo clicked";
//						// Rollback transaction
//						//mysqli_rollback($db);
//						$db->rollback($db);	
//					}
//					else if (empty($_POST['undo'])){
//						echo "<br> undo NOT clicked";
//						// Commit transaction
//						//mysqli_commit($db);
//						$db->commit($db);
//					}
//					// Close connection
//					mysqli_close($db);
//				// }
//			}
//		?> -->

		<?php
			function display(){
				//Connect to the db, initialize variables and save the submitted data
				session_start();
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "mysql";
				$db = mysqli_connect('localhost', 'root', '', $dbname);

				if ($db->connect_error) {
	   				die("Connection failed: " . $db->connect_error);
				}
				echo "Connected successfully";

				//mysqli_autocommit($db,FALSE); //turn ON transaction
				
				//if save is clicked
				if (isset($_POST['save'])) {
						//initialize variables
						$creator = $_POST['creator'];
						$title = $_POST['title'];
						$type = $_POST['type'];
						$identifier = $_POST['identifier'];
						$date = $_POST['date'];
						$language = $_POST['language'];
						$description = $_POST['description'];
						$successInsertion = FALSE;

					//check that at least one of the fields is filled to ensure correct echo message displayed
					if (!empty($_POST['creator']) || !empty($_POST['title']) || 
					!empty($_POST['identifier']) || !empty($_POST['date']) || !empty($_POST['language']) 
					|| !empty($_POST['description']) || !empty($_POST['creator']) || !empty($_POST['type'])){
						//identifier must be max 13 char length as otherwise its invalid ISBN 
						if (!empty($_POST['identifier'])){
					 		if(strlen(trim($_POST['identifier'])) < 14 ){
								mysqli_query($db, "INSERT INTO ebook_metadata (creator, title, type, identifier, date, language, description)
								VALUES ('$creator', '$title', '$type', '$identifier', '$date', '$language', '$description')");
					 			$successInsertion = TRUE;
					 		}else{
					 			echo "<br> Only Identifier corresponsing to ISBN 13 charecters maximum is accepted";
					 		}
					 	//if identifier (ISBN) field not filled insert the data
					 	}else{						
							mysqli_query($db, "INSERT INTO ebook_metadata (creator, title, type, identifier, date, language, description)
							VALUES ('$creator', '$title', '$type', '$identifier', '$date', '$language', '$description')");
							$successInsertion = TRUE; 
							echo "<br> NO identifier";
						}
						//
					 	if ($successInsertion) {
					 		echo "<br> New record created successfully";
					 	} else{
					 		echo "<br> New value was not set";
					 	}
					}else{
					echo "<br> Empty fields can not be inserted";
					}	
				}			
			}
			display();
		?>

			<?php
				function retrieve(){
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "mysql";

					$connection = new mysqli($servername, $username, $password, $dbname);
					$db = mysqli_select_db($connection, "ebook_metadata");

					if (isset($_GET['submit'])) {
						$id = $_GET['id'];
						$creator = $_GET['creator'];
						$title = $_GET['title'];
						$type = $_GET['type'];
						$identifier = $_GET['identifier'];
						$date = $_GET['date'];
						$language = $_GET['language'];
						$description = $_GET['description'];
						
						$query = mysqli_query($connection, "update ebook_metadata set
						creator='$creator', title='$title', type='$type',
						identifier='$identifier', date='$date', language='$language', description='$description' where id='$id'");
					}

					$query = mysqli_query($connection, "select * from ebook_metadata");
					//if retrieve button is clicked
					if (isset($_POST['retrieve'])){
						if ($query->num_rows > 0) {
							echo "<table id = 'table'><tr><th>Id</th><th>Creator</th><th>Title</th><th>Type</th><th>Identifier</th><th>Date</th><th>Language</th><th>Description</th></tr>";
							// output data of each row
							while ($row = mysqli_fetch_array($query)) {
								echo "<tr><td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row["id"]}</a></td>
								<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row['creator']}</a></td>
								<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row["title"]}</a></td>
								<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row['type']}</a></td>
								<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row["identifier"]}</a></td>
								<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row['date']}</a></td>
								<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row["language"]}</a></td>
								<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row['description']}</a></td></tr>";
								//echo "</br>";
							}
						}
					}
					//UPDATE
					if (isset($_GET['update'])) {
						$update = $_GET['update'];
						$query1 = mysqli_query($connection, "select * from ebook_metadata where id=$update");
						$successUpdate = FALSE;
					
						while ($row1 = mysqli_fetch_array($query1)) {
							echo "<form class='form' method='get'>";
							echo "<h2>Update Form</h2>";
							echo "<hr/>";
							
							echo"<input class='input' type='hidden' name='id' value='{$row1['id']}' />";
							echo "<br />";
							
							echo "<label>" . "Creator:" . "</label>" . "<br />";
							echo"<input class='input' type='text' name='creator' value='{$row1['creator']}' />";
							echo "<br />";
							
							echo "<label>" . "Title:" . "</label>" . "<br />";
							echo"<input class='input' type='text' name='title' value='{$row1['title']}' />";
							echo "<br />";
							
							echo "<label>" . "Type:" . "</label>" . "<br />";
							echo"<input class='input' type='text' name='type' value='{$row1['type']}' readonly/>";
							//dropdown to select new type
							$types = array(' ','Thriller','Romance','Autobiography', 'Sci-Fi');
							$type = isset($_POST['type']) && in_array($_POST['type'],$types)?$_POST['type']:'Article';
							echo '<select name="type">';
								foreach($types as $option) {
								 echo '<option value="'.$option.'"'.(strcmp($option,$type)==0?' selected="selected"':'').'>'.$option.'</option>';
								}
							echo '</select>';
							echo '</select>';
							echo "<br />";

							echo "<label>" . "Identifier:" . "</label>" . "<br />";
							echo"<input class='input' type='text' name='identifier' value='{$row1['identifier']}' />";
							echo "<br />";

							echo "<label>" . "Date:" . "</label>" . "<br />";
							echo"<input class='input' type='date' name='date' value='{$row1['date']}' />";
							//echo "<textarea rows='15' cols='15' name='date'>{$row1['date']}";
							echo "</textarea>";
							echo "<br />";
							echo "<label>" . "Language:" . "</label>" . "<br />";
							echo"<input class='input' type='text' name='language' value='{$row1['language']}' readonly/>";
							//dropdown to select new language
							$types = array(' ','English-UK','English-US','Russian', 'Japanese');
							$type = isset($_POST['language']) && in_array($_POST['language'],$types)?$_POST['language']:'Article';
							echo '<select name="language">';
							foreach($types as $option) {
								 echo '<option value="'.$option.'"'.(strcmp($option,$type)==0?' selected="selected"':'').'>'.$option.'</option>';
							}
							echo '</select>';
							echo '</select>';
							echo "<br />";

							echo "<label>" . "Description:" . "</label>" . "<br />";
							echo"<input class='input' type='text' name='description' value='{$row1['description']}' />";
							echo "<br />";
							
							echo "<input class='btn' type='submit' name='submit' value='Update' />";
							echo "<input class='btn' type='submit' name='delete' value='Delete' />";
							echo "</form>";
						}
					}
					////DELETE
					if(isset($_GET['delete'])){
						$delete = $_GET['delete'];
						$id=$_GET['id'];
						// sql to delete a record
						mysqli_query($connection, "delete from ebook_metadata where id=$id");
						retrieveA();
					}	
				}
				retrieve();
			?>

			<?php
				//called after deletion to display updated table to user
				function retrieveA(){
					//session_start();
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "mysql";
					$conn = new mysqli($servername, $username, $password, $dbname);
					$sql = "SELECT id, creator, title, type, identifier, date, language, description FROM ebook_metadata";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						echo "<table id = 'table'><tr><th>Id</th><th>Creator</th><th>Title</th><th>Type</th><th>Identifier</th><th>Date</th><th>Language</th><th>Description</th></tr>";
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<tr><td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row["id"]}</a></td>
							<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row['creator']}</a></td>
							<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row["title"]}</a></td>
							<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row['type']}</a></td>
							<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row["identifier"]}</a></td>
							<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row['date']}</a></td>
							<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row["language"]}</a></td>
							<td><a href='eBook_Meta_Data.php?update={$row['id']}'>{$row['description']}</a></td></tr>";
						}
						echo "</table>";
					}else{
						echo "0 results";
					}
					$conn->close();	
				}
			?>
					
			<style>
				h2{
					text-align: center;
				}
				body{
	    			font-size: 19px;
				}
				table{
	    			width: 50%;
	    			margin: 30px auto;
	    			border-collapse: collapse;
	    			text-align: left;
				}
				tr{
	    		border-bottom: 1px solid #cbcbcb;
				}
				th, td{
				    border: none;
				    height: 30px;
				    padding: 2px;
				}
				tr:hover{
				    background: #F5F5F5;
				}
				form{
				    width: 250px;
				    margin: 0 auto;
				    text-align: left;
				}

				.input-group{
				    margin: 10px 0px 10px 0px;
				}
				.input-group label{
				    display: block;
				    text-align: left;
				    margin: 3px;
				}
				.input-group input{
				    height: 30px;
				    width: 93%;
				    padding: 5px 10px;
				    font-size: 16px;
				    border-radius: 5px;
				    border: 1px solid gray;
				}
				#container{
				    text-align: center;
				}
				.btn{
				    padding: 10px;
				    font-size: 15px;
				    color: white;
				    background: #5F9EA0;
				    border: none;
				    border-radius: 5px;
					display:inline-block;
				}
				.edit_btn {
				    text-decoration: none;
				    padding: 2px 5px;
				    background: #2E8B57;
				    color: white;
				    border-radius: 3px;
				}
				.del_btn {
				    text-decoration: none;
				    padding: 2px 5px;
				    color: white;
				    border-radius: 3px;
				    background: #800000;
				}
				.msg {
				    margin: 30px auto; 
				    padding: 10px; 
				    border-radius: 5px; 
				    color: #3c763d; 
				    background: #dff0d8; 
				    border: 1px solid #3c763d;
				    width: 50%;
				    text-align: center;
				}
				table th {
					border: 3px solid #5F9EA0;
					background-color:#5F9EA0;
					font-size: 14px;
					padding: 10px 5px;
					overflow: hidden;
					word-break: normal;
					padding: 10px;
				    font-size: 15px;
				    border: none;
				    border-radius: 5px;
				}
				#form3{
				color:green;
				font-weight:700
				}
			</style>
	</body>
</html>