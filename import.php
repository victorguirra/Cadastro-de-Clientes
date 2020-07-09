<?php

require_once 'db_connection.php';

$sql = "SELECT * FROM data_clients";
$result = mysqli_query($connect, $sql);

while($data = mysqli_fetch_array($result)){
?>
    <h1><?php echo $data['name'];?></h1>
<?php
};
?>

