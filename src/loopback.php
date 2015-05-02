<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>loopback.php</title>
	</head>
	<body>	
	<?php

		$jsonArr= array();
		$jsonArr['Type'] = $_SERVER['REQUEST_METHOD'];
		$jsonArr['parameters'] = $_REQUEST;

		if(empty($jsonArr['parameters'])){
			$jsonArr['parameters'] == null;
		}
		else{
			foreach($jsonArr['parameters'] as $key => $value){
				if($value== ""){
					$jsonArr['parameters'][$key] = "undefined";
				}
			}
		}
		echo json_encode($jsonArr);
	?>	
	</body>
</html>