<?php 
$db_connection = mysqli_connect('localhost','root');
$query = mysqli_select_db($db_connection,'dropdown');

if (!empty($_POST['state_id'])) {
	$query = "select * from city where stateID = '" .$_POST['state_id']. "' order by city_name asc";
	$results = mysqli_query($db_connection,$query);
	?>
	<option value disabled selected>Select City</option>
	<?php
	foreach ($results as $city) {
		?>
		<option value="<?php echo $city['id']; ?>"><?php echo $city['city_name']; ?></option>
		<?php
	}
}
?>