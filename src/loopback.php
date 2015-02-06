<?php
	foreach ($_GET as $key=>$value){ 
	
	if($key==0 && $value==0){
		string json_encode({"Type":"[GET]", "parameters":null}) 
	}

	else (foreach){
		string json_encode({"Type":"[GET]", "parameters": $key"," $value}) 
	}
?>