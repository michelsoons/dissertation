<?php
header("Content-Type:application/json");
if (isset($_GET['type']) && $_GET['type']!="") {
	include('db.php');
	$type = $_GET['type'];
	$result = mysqli_query(
	$conn,
	'SELECT * FROM resources WHERE type="'.$type.'"');
	if(true){
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($data);
	mysqli_close($conn);
	}else{
		response(NULL, NULL, 200,"No Record Found");
		}
}else{
	response(NULL, NULL, 400,"Invalid Request");
	}
 
// function response($type,$lang,$title,$link){
// 	$response['type'] = $type;
// 	$response['lang'] = $lang;
// 	$response['title'] = $title;
// 	$response['link'] = $link;
// 	 echo json_encode($response);
// }
?>