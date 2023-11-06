<?php
require 'DbConnection.php'
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="table.css">
</head>
<body>

<table>
    <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>City</th>
    </tr>

    <?php
    $db = new DbConnection();
    $statement = $db->fetch_data();
    while($row = $statement->fetch()){
        $userId = $row['Sr No'];
        $name = $row['Name'];
        $email = $row['Email'];
        $gender = $row['Gender'];
        $city = $row['City'];
        ?>
    <tr>
        <td><?= $userId ?></td>
        <td><?= $name ?></td>
        <td><?= $email ?></td>
        <td><?= $gender ?></td>
        <td><?= $city ?></td>
    </tr>
<?php
    }
?>
    <tr>
        <td>
            <a href="http://localhost:63342/php_projects/Assignment1/index.php" > Return To Form </a>
        </td>
    </tr>




</table>

</body>
</html>

