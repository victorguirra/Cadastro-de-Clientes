<?php

require_once 'db_connection.php';

$sql = "SELECT * FROM data_clients";
$result = mysqli_query($connect, $sql);

while($data = mysqli_fetch_array($result)){
?>  
    <tr>

        <td><?php echo $data['name'] ?></td>
        <td><?php echo $data['age'] ?></td>
        <td><?php echo $data['email'] ?></td>
        <td><?php echo $data['telephone'] ?></td>

        <td><button name="editData" id="editData"><a href="editData/index.php?id=<?php echo $data['id'];?>">Editar</a></button></td>
        <td><button name="deletData" id="deleteData"><a href="deletData/index.php?id=<?php echo $data['id'];?>">Apagar</a></button></td>

    </tr>

<?php
};
?>

