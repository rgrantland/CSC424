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
  <?php
    include ("ZooGuide_DBConnect.php");

    $mysqli = new mysqli($servername, $username, $password, $database);
    if($mysqli -> connect_errno) {
      echo '<p>Failed to connect to MySQL: '.$mysqli -> connect_error;
      exit();
    }

    $id = $mysqli -> real_escape_string($_GET['id']);
    $query = "SELECT * FROM animals WHERE `common_name` = '$id'";
    $result = $mysqli->query($query);
    $row = mysqli_fetch_array($result);
    $mysqli -> close();
  ?>

  <table width="100%" border="0" cellspacing="2" cellpadding="2">
    <?php
    function mysqli_result($res, $row, $feild=0) {
      $res->data_seek($row);
      $datarow = $res->fetch_array();
      return $datarow[$feild];
    }

    $i=0;
    while ($i < $result->num_rows) {
      $id=mysqli_result($result, $i, "common_name");
      $f1=mysqli_result($result, $i, "animal_img");
      $f2=mysqli_result($result, $i, "scientific_name");
      $f3=mysqli_result($result, $i, "endangered");
      $f4=mysqli_result($result, $i, "diet");
      $f5=mysqli_result($result, $i, "class");
      $f6=mysqli_result($result, $i, "live_region");
      $f7=mysqli_result($result, $i, "environment");
      $f8=mysqli_result($result, $i, "active_time");

      $f9=mysqli_result($result, $i, "discription");
      $f10=mysqli_result($result, $i, "eat");
      $f11=mysqli_result($result, $i, "mating");
      $f12=mysqli_result($result, $i, "facts");
    ?>

	<tr>
    <td valign="top">
      <h1><?php echo $id; ?></h1>
      <img src=<?php echo $f1; ?> height="180"/>
      <br/>
      <?php if ($f2 != null):?>
        <b>Scientific name:</b> <?php echo $f2; ?>
        <br />
      <?php endif; ?>
      <?php if ($f3 != null):?>
        <b>Endangerment status:</b> <?php echo $f3; ?>
        <br />
      <?php endif; ?>
      <?php if ($f4 != null):?>
        <b>Diet:</b> <?php echo $f4; ?>
        <br />
      <?php endif; ?>
      <?php if ($f5 != null):?>
        <b>Animal Classification:</b> <?php echo $f5; ?>
        <br />
        <?php if ($f8 == null && $f7 == null && $f6 == null):?>
          <hr size=?15 />
        <?php endif; ?>
      <?php endif; ?>
      <?php if ($f6 != null):?>
        <b>Region they live in:</b> <?php echo $f6; ?>
        <br />
        <?php if ($f8 == null && $f7 == null):?>
          <hr size=?15 />
        <?php endif; ?>
      <?php endif; ?>
      <?php if ($f7 != null):?>
        <b>Environment they live in:</b> <?php echo $f7; ?>
        <br />
        <?php if ($f8 == null):?>
          <hr size=?15 />
        <?php endif; ?>
      <?php endif; ?>
      <?php if ($f8 != null):?>
        <b>Active time of day:</b> <?php echo $f8; ?>
        <br />
        <hr size=?15 />
      <?php endif; ?>
      <?php if ($f9 != null):?>
        <b>Physical Discription:</b> <br /> <?php echo $f9; ?>
        <br />
        <hr size=?15 />
      <?php endif; ?>
      <?php if ($f10 != null):?>
        <b>What they eat:</b> <br /> <?php echo $f10; ?>
        <br />
        <hr size=?15 />
        <?php endif; ?>
      <?php if ($f11 != null):?>
        <b>Unique Mating Habits:</b> <br /> <?php echo $f11; ?>
        <br />
        <hr size=?15 />
      <?php endif; ?>
      <?php if ($f12 != null):?>
        <b>Fun Facts:</b> <br /> <?php echo $f12; ?>
        <br />
        <hr size=?15 />
      <?php endif; ?>
    </td>
    <?php
      $i++;
    }
    ?>
  </tr>
	</table>
</body>
</html>
