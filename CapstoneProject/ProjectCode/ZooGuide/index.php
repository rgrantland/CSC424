<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

<style>

#svgContainer {
    position: relative;
    height: 100%;
    vertical-align: center;
		align-items: center;
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

@media screen and (min-width: 1000px) {
	#center {
		display: block;
		margin-left: auto;
		margin-right: auto;
		height: 100%;
	}
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

<div>
	<h4 id="welcomeHeader">Welcome to the virtual zoo guide for Hattiesburg Zoo!</h4>
	<div id="navbar">
	  <a class="list" href="index.php">Home</a>
	  <a class="list" href="ZooGuide_FullAnimalList.php">Animals</a>
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

	<div>
		<svg viewBox="0 0 3338 5063" id="center">

			<image width="3338"
				height="5063" href="ZooMap.png" >
			</image>

				<a href="ZooGuide_Region_1.php">
				<polygon points="2382,1920,2052,1860,2064,1623,1956,1320,1752,1272,1674,1032,1944,714,2229,636,2568,687,2793,900,2934,1335,2946,1656,2937,1917,2925,2013,2385,1917"
				fill="blue" fill-opacity="0.0"/>
				</a>

				<a href="ZooGuide_Region_2.php">
				<polygon points="2040,1860,1947,1830,1650,1554,1362,1392,1203,1356,1152,1170,984,918,1086,750,1233,648,1506,627,2070,654,1842,825,1674,1023,1689,1128,1749,1314,1947,1317,1947,1440,1968,1524,2064,1623"
				fill="blue=" fill-opacity="0.0"/>
				</a>


				<a href="ZooGuide_Region_3.php">
				<polygon points="1466,1928,1308,1662,1238,1634,1118,1644,1152,1516,1238,1636,1118,1644,1148,1502,1232,1450,1340,1442,1446,1478,1534,1544,1594,1618,1598,1752,1470,1928"
				fill="blue" fill-opacity="0.0"/>
				</a>


				<a href="ZooGuide_Region_3.php">
				<polygon points="932,1968,896,1936,818,1892,808,1842,956,1816,1052,1768,1094,1768,1110,1878,1084,1952,1042,2034,1006,2052,960,2034,"
				fill="blue" fill-opacity="0.0"/>
				</a>


				<a href="ZooGuide_Region_4.php">
				<polygon points="1096,1680,1248,1668,1280,1682,1438,1934,1468,1930,1594,1764,1602,1700,1598,1624,1684,1740,1728,1832,1802,1870,1872,1880,2000,1930,2058,1986,2132,2038,2134,2092,2004,2286,1974,2238,1788,2198,1562,2136,1490,1984,1446,1952,1322,1988,1276,1972,1244,1948,1200,1864,1156,1772,1104,1720,"
				fill="blue" fill-opacity="0.0"/>
				</a>
				</g>

				<a href="ZooGuide_Region_5.php">
				<polygon points="2248,2044,2508,2116,2398,2430,2188,2362,2086,2346,2212,2046"
				fill="blue" fill-opacity="0.0"/>
				</a>


				<a href="ZooGuide_Region_6.php">
				<polygon points="1402,2444,1620,2526,1650,2478,1678,2472,1690,2544,1726,2554,1818,2584,1832,2698,1402,2562,"
				fill="blue" fill-opacity="0.0"/>
				</a>


				<a href="ZooGuide_Region_7.php">
				<polygon points="1088,2850,1024,2796,1014,2696,1036,2632,1034,2568,1080,2532,1170,2532,1234,2568,1272,2628,1278,2706,1258,2784,1208,2812,1152,2846"
				fill="blue" fill-opacity="0.0"/>
				</a>


				<a href="ZooGuide_Region_7.php">
				<polygon points="1254,3226,1206,3198,1214,3138,1170,2942,1258,2898,1314,2854,1358,2754,1402,2568,1830,2702,1724,2938,1606,3142,1600,3280,1526,3296,1392,3294,1276,3250"
				fill="blue" fill-opacity="0.0"/>
				</a>


				<a href="ZooGuide_Region_7.php">
				<polygon points="2306,2730,2092,2762,2104,2684,2164,2644,2174,2608,2206,2610,2212,2640,2268,2658,2296,2690"
				fill="blue" fill-opacity="0.0"/>
				</a>


				<a href="ZooGuide_Region_8.php">
				<polygon points="720,3378,688,3368,668,3378,662,3352,640,3350,508,3384,414,3276,356,3168,354,3060,414,2994,454,2972,466,3018,592,3014,748,3118,760,3170,756,3208,722,3242,714,3298,724,3306,716,3318,"
				fill="blue" fill-opacity="0.0"/>
				</a>


				<a href="ZooGuide_Region_9.php">
				<polygon points="987,3567,1041,3511,1108,3576,1152,3555,1171,3570,1164,3592,1149,3621,1171,3639,1188,3631,1221,3655,1254,3684,1252,3702,1248,3718,1261,3750,1284,3798,1281,3849,1272,3874,1242,3913,1008,3625"
				fill="blue" fill-opacity="0.0"/>
				</a>

				<a href="ZooGuide_Region_9.php">
				<polygon points="1624,3667,1744,3594,1813,3703,1831,3711,1837,3742,1713,3814"
				fill="blue" fill-opacity="0.0"/>
				</a>

		</svg>

	</div>
</div>
</body>
</html>
