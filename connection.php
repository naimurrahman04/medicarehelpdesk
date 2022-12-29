

<?php
$db = mysqli_connect('localhost', 'ezyro_29316367', 'af8vkwneqa') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'ezyro_29316367_mcare' ) or die(mysqli_error($db));
?>
