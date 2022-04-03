<?php
include("connection.php");
?>

<?php
$query = mysqli_query($db, "SELECT * FROM `soil_velues`");
while ($row = mysqli_fetch_array($query)) {

	$ID = $row['stt_id'];
	$Soil_Humid = $row['soil_Humid'];
	$Soil_EC = $row['soil_EC'];
	$Soil_N = $row['soil_N'];
	$Soil_P = $row['soil_P'];
	$Soil_K = $row['soil_K'];
} ?>
<div class="container">
	<div class="row">
		<div class="col col-box">
			<P class="text"> Humid: <span><?php echo $Soil_Humid; ?></span></P>
		</div>
		<div class="col col-box">
			<P class="text"> N: <span><?php echo $Soil_N; ?></span></P>
		</div>
		<div class="col col-box">
			<P class="text"> P: <span><?php echo $Soil_P; ?></span></P>
		</div>
		<div class="col col-box">
			<P class="text"> K: <span><?php echo $Soil_K; ?></span></P>
		</div>
	</div>
	<div class="row">
		<div class="col col-box">
			<P class="text"> EC: <span><?php echo $Soil_EC; ?></span></P>
		</div>
		<div class="col col-box">
			<P class="text"> Air Temp: <span><?php echo $Soil_N; ?></span></P>
		</div>
		<div class="col col-box">
			<P class="text"> Air Humid: <span><?php echo $Soil_P; ?></span></P>
		</div>
	</div>
</div>