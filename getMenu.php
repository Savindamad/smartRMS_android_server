<?php

$con = mysqli_connect("br-cdbr-azure-south-b.cloudapp.net", "b50735a87d1621", "8a720e5f", "smart_rms");
$sql_query = "select * from menu_items; ";

$result = mysqli_query($con,$sql_query);
$num_of_rows = mysqi_num_rows($result);






?>