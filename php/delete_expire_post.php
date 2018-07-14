<?php 
include 'config/connection.php';
$query1="select * from post_info";
$result1=mysqli_query($con,$query1);
date_default_timezone_set("Asia/Dhaka");
$current_date = date("Y-m-d");
$row1=mysqli_fetch_array($result1);
$today_time = strtotime($current_date);

 $i=0;
while ($row1=mysqli_fetch_array($result1)) {
	    $expire_time = strtotime($row1['discount_end_date']);
	if ($expire_time < $today_time ) {
		$post_id=$row1['post_id'];
        $query2="DELETE FROM post_info WHERE post_id='$post_id'";
        $result2=mysqli_query($con,$query2);
        $i++;

}
}

?>