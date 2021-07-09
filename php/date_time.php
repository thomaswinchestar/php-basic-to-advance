<?php
// date_default_timezone_set("Asia/Yangon");
// echo date("Y-m-d");
// echo "<br>";
// echo date("h:i:sa");

$cur_date = date("Y-m-d");
// $unix = strtotime($cur_date);
// echo date('d-m-Y', $unix);

$update_date = strtotime("+1 months", strtotime($cur_date));
echo date('d-m-Y', $update_date);
