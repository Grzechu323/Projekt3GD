<?php

include 'connection.php';

?>

<table class="table table-hover">
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Indeks</th>
    <th>E-mail</th>
    <th>Nr telefonu:</th>
<?php
$sql = "SELECT * FROM StudentCRUD";
$output = $connection->query($sql);

while($row = $output->fetch()) {
	?>
	<tr>
		<td><?php echo $row[0]; ?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
	</tr>
<?php
}
?>
<table border="1">