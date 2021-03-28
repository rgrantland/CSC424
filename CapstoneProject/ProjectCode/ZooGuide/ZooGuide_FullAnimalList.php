<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<style>
* {
  box-sizing: border-box;
}
</style>

<body>
	<div id="navbar">
	  <a href="index.php">Home</a>
	  <a href="ZooGuide_FullAnimalList.php">Animals</a>
		<a href="javascript:goBack();" class="right">Back</a>
		<a class="search">
		<form style="margin: 0px;" action="ZooGuide_AnimalSearch.php" method="GET">
			<input type="text" placehoder="Search" name="query"/>
			<button type="submit" value="search">Search</button>
		</form>
		</a>
		<script>
			function goBack() {
				window.history.back();
			}
		</script>
	</div>

	<div id="row">
		<div id="animalListSide">
			<?php
			include("ZooGuide_DBConnect.php");

			$conn = mysqli_connect($servername, $username, $password, $database);

			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM animals";
			$result = $conn->query($sql);

			// worked #1
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
				echo '<a href="ZooGuide_AnimalResults.php?id='.$row["common_name"].'">'.$row["common_name"].'</a>';
				echo '<p></p>';
				}
			} else {
				echo '<p>0 results<p>';
				}

			  mysqli_close($conn);
			?>

		</div>
	</div>
</body>
</html>
