<?php
include_once "dbconnection.php";
$records = showRecords();
//print_r($records);

$i = 0;
while ($i < sizeof($records)){
//    print_r($records[$i]); //arrayname[index] --> value
    $record = $records[$i]; //inside each record, we have place 0 for id, place 1 for username, place 2 for password, place 3 for name
    ?>
    <p><?php echo $record->id; ?>
        <?php echo $record->getUsername(); ?>
        <?php echo $record->getPassword(); ?>
        <?php echo $record->name; ?>
    </p>
    <?php
    $i = $i + 1;
}