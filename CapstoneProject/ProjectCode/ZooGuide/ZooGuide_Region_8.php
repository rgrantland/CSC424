<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

<style>
<style>

#svgContainer {
    position: relative;
    height: 100%;
    vertical-align: center;
	display: grid;
    margin: 0;
    overflow: hidden;
    }

#svgContainer svg {
    display: inline-block;
    position: absolute;
	max-width: 100%;
    max-height: 100vh;
	margin-left: auto;
	margin-right: auto;
    }

* {
  box-sizing: border-box;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }

</style>
</head>
<body bgcolor="#F5F5DC">

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
		<div id="side">

			<h1>Australia</h1>

			<img src="RegionsPNG/8.png" style="width:325px;">

		</div>

		<div id="main">

			<h1>Animals</h1>

			<?php
			  include("ZooGuide_DBConnect.php");

			  $conn = mysqli_connect($servername, $username, $password, $database);

			  if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			  }

			  $sql = "SELECT * FROM animals Where zoo_region = '8'";
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
