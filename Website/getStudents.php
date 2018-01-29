<?php

$dept = $_GET['q'];
include('database/dbConfig.php');
$query = $db->prepare("SELECT * FROM student where Course = '" . $dept . "'");
$run   = $query->execute();

$rs = $query->fetchAll(PDO::FETCH_OBJ);

$chat = '<table class="table">
                    <tr>
                        <th>S.No.</th>
                        <th>Reg no.</th>
                        <th>Name</th>
                        <th>Total Period</th>
                        <th>Att Period</th>
                        <th>mark</th>
                        <th>status</th>
                    </tr>';

$i = 1;
foreach ($rs as $students) {
    $chat .= '<tr>
                <td>' . $i . '</td>
                <td>' . $students->RegNo . '</td>
                <td>' . $students->Name . '</td>
                <td><input type="text" style="width : 50%;" name="wh' . $students->RegNo . '"></td>
                <td><input type="text" style="width : 50%;" name="pr' . $students->RegNo . '"></td>
                <td><input type="text" style="width : 50%;" name="ma' . $students->RegNo . '"></td>
                <td></td>
            </tr>';
    $i++;
}

$chat .= '</table>';

echo $chat;
echo '<div>
        <br>
        <button type="submit" id="markSubmit" class="btn btn-default" style="position: absolute; right: 50%; background-color: black; color: white; border-radius: 10px;" onclick="refresh()">Save</button>
        <br><br>
    </div>';
?>
