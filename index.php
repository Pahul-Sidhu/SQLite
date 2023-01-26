<?php
$db = new SQLite3('school.db');
$version = $db->querySingle('SELECT SQLITE_VERSION()');
$res = $db->query('SELECT * FROM Students');
while ($row = $res->fetchArray()) {
    echo "{$row['StudentId']} {$row['FirstName']} {$row['LastName']} {$row['School']}<br />";
}



$db->close();

?>