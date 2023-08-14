<?php
    require_once('./config.php');
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    if (!$mysqli) {
    die("Cannot access db.");
    }
    $result= $mysqli -> query("select * from student") or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
        </script>
    <title>Student Manager</title>
</head>
<body>
    <h1>Student Manager</h1>
    <table class="table">
        <thead>
            <td scope="col">Emp. ID</td>
            <td scope="col">Name</td>
            <td scope="col">Department</td>
        </thead>
        <tbody>
            <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr scope=\"row\">";
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
