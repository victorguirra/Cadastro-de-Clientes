<?php

require_once 'db_connection.php';

$sql = "SELECT * FROM data_clients";
$result = mysqli_query($connect, $sql);

while($data = mysqli_fetch_array($result)){
?>  
    <div class="wrapperInfoClients">

        <table>

            <thead>

                <tr>

                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                <tr>

            </thead>

        </table>
    
    </div>
<?php
};
?>

