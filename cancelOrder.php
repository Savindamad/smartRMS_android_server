<?php
	$con = mysqli_connect("br-cdbr-azure-south-b.cloudapp.net", "b50735a87d1621", "8a720e5f", "smart_rms");
    header('Content-Type: application/json');

    $tableNum = $_POST["orderNum"];

	$sql_query = "update table_type set waiter_id='0' where table_no='$tableNum';";
	$sql_query1 = "update customer_order set status='3' where table_no='$tableNum';"

	$result = mysqli_query($con,$sql_query);
	$result1 = mysqli_query($con,$sql_query1);
    $num_of_rows = mysqli_num_rows($result);

    $json["success"]="true";
    echo json_encode($json);
?>