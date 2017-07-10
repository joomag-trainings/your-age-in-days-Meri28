<?php
$current_date=strtotime("2017-07-10");
$old_date=strtotime("1997-05-27");
$difference=$current_date-$old_date;
echo 'Days - ' .floor($difference/(60*60*24));
?>



