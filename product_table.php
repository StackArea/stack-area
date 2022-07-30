<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>GENDER</th>
        <th>ADDRESS</th>
        <th>DISEASE</th>
        <th>DOCTOR ID</th>
        <th>ROOM ID</th>
        <th>ADMITTED ON</th>
        <th>DISCHARGED ON</th>
    </tr>
    <?php
        include "connection.php";

        error_reporting(0);
        session_start();
                
        $sql = "SELECT * FROM patient WHERE D_id = ".$_SESSION['doctor_id'];
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["P_id"] . "</td>";
            echo "<td>" . $row["P_name"] . "</td>";
            echo "<td>" . $row["P_phone"] . "</td>";
            echo "<td>" . $row["P_gender"] . "</td>";
            echo "<td>" . $row["P_Address"] . "</td>";
            echo "<td>" . $row["disease"] . "</td>";
            echo "<td>" . $row["R_id"] . "</td>";
            echo "<td>" . $row["Date_admitted"] . "</td>";
            echo "<td>" . $row["Date_checkedout"] . "</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>