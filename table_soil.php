<?php
include("connection.php");
$perpage = 10;
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}

$start = ($page - 1) * $perpage;
$query = mysqli_query($db, "SELECT * FROM `soil_velues` limit {$start} , {$perpage}");
?>

<table class="table table-bordered">
	<thead class="table-light">
		<th>Date</th>
		<th>Time</th>
		<th>Humid</th>
		<th>EC</th>
		<th>N</th>
		<th>P</th>
		<th>K</th>
	</thead>
	<?php
	while ($row = mysqli_fetch_assoc($query)) {

		$ID = $row['stt_id'];
		$Dates = $row['dates'];
		$Times = $row['times'];
		$Soil_Humid = $row['soil_Humid'];
		$Soil_EC = $row['soil_EC'];
		$Soil_N = $row['soil_N'];
		$Soil_P = $row['soil_P'];
		$Soil_K = $row['soil_K'];

	?>
		<tbody class="overflow-auto scroll">
			<tr>
				<td><?php echo $Dates; ?></td>
				<td><?php echo $Times; ?></td>
				<td><?php echo $Soil_Humid; ?></td>
				<td><?php echo $Soil_EC; ?></td>
				<td><?php echo $Soil_N; ?></td>
				<td><?php echo $Soil_P; ?></td>
				<td><?php echo $Soil_K; ?></td>
			</tr>
		</tbody>
	<?php 	} ?>
</table>
<?php
$query2 = mysqli_query($db, "SELECT * FROM `soil_velues`");
$total_record = mysqli_num_rows($query2);
$total_page = ceil($total_record / $perpage);
?>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="dashboard.php?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
	<?php for($i=1;$i<=$total_page;$i++){ ?>
    <li class="page-item"><a class="page-link" href="dashboard.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
	<?php } ?>
    <li class="page-item">
      <a class="page-link"href="dashboard.php?page=<?php echo $total_page;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
