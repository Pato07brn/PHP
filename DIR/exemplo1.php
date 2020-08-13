<?php 

	$images = scandir("images");
	
	$data = array();

	foreach ($images as $key){
		if (!in_array($key, array(".", ".."))){
			$filename = "images" . DIRECTORY_SEPARATOR . $key;

			$info = pathinfo($filename);

			$info["size"] = filesize($filename);
			$info["modified"] = date("d/m/Y H:i:s", fileatime($filename));
			$info["url"] = "http://localhost/dir/".str_replace("\\", "/", $filename);

			array_push($data, $info);
		}
	}

	echo json_encode($data);
	

  ?>