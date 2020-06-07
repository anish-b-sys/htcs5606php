<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show my records</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Name</th>
    </tr>
    <?php
    include_once "dbconnection.php";
    $records = showRecords();
    //print_r($records);

    $i = 0;
    while ($i < sizeof($records)){
//    print_r($records[$i]); //arrayname[index] --> value
        $record = $records[$i]; //inside each record, we have place 0 for id, place 1 for username, place 2 for password, place 3 for name
        ?>
        <tr>
            <td><?php echo $record->id; ?></td>
            <td><?php echo $record->getUsername(); ?></td>
            <td><?php echo $record->getPassword(); ?></td>
            <td><?php echo $record->name; ?></td>
        </tr>
        <?php
        $i = $i + 1;
    }

    ?>
</table>
</body>
</html>