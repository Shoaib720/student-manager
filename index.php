<?php
    require_once('./config.php');
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    if (!$mysqli) {
    die("Cannot access db.");
    }
    $result= $mysqli -> query("select * from student");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
        </script>
    <title>Document</title>
</head>
<body>
    <h1>Employee Manager</h1>
    <table>
        <thead>
            <td>Emp. ID</td>
            <td>Name</td>
            <td>Department</td>
        </thead>
        <tbody>
            <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['ID']."</td>";
                    echo "<td>".$row['NAME']."</td>";
                    echo "<td>".$row['DEPARTMENT']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
