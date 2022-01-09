<?php 
$db_connection = mysqli_connect('localhost','root');
$query = mysqli_select_db($db_connection,'dropdown');

if (!empty($_POST['country_id'])) {

	$query = "select * from states where countryID = '" .$_POST['country_id']. "' order by state_name asc";
	$results = mysqli_query($db_connection,$query);
	?>
	<option value disabled selected>Select State</option>
	<?php
	foreach ($results as $state) {
		?>
		<option value="<?php echo $state['id']; ?>"><?php echo $state['state_name']; ?></option>
		<?php
	}
}

?>