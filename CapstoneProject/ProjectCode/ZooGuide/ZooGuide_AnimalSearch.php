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
    // connect to zooguide database
    include("ZooGuide_DBConnect.php");
    $conn = mysqli_connect($servername, $username, $password, $database);
    // check connection and die on error
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // get query string from search bar
    $query = $_GET['query'];

    // converts special characters to html equivalent
    $query = htmlspecialchars($query);
    // prevents SQL injection
    $query = $conn -> real_escape_string($query);

    // serach for results in $database
    $request = "SELECT * FROM animals WHERE (`common_name` LIKE '%".$query."%')";
    $result = $conn -> query($request);

    // display results with links to their information
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<a href="ZooGuide_AnimalResults.php?id='.$row['common_name'].'">'.$row['common_name'].'</a>';
      echo '<p></p>';
    }
    } else {
      echo '<p>no results for '.$query.'<p>';
    }

    // close connection
    mysqli_close($conn);
  ?>
</div>
</div>
</body>
